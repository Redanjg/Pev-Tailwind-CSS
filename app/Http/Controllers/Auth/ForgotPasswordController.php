<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Illuminate\Support\Str;

  

class ForgotPasswordController extends Controller
{
    
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('auth.passwords.forgot');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);
  
          $token = Str::random(64);

          $cek =  DB::table('password_reset_tokens')->where('email', $request->email)->first();

          if (!$cek) {
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
              ]);
    
            Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            return back()->with('message', 'We have e-mailed your password reset link!');
          } else {
            return back()->with('error', 'We have already e-mailed your password reset link!');
          }

        //   return $cek;
  
        //   DB::table('password_reset_tokens')->insert([
        //       'email' => $request->email, 
        //       'token' => $token, 
        //       'created_at' => Carbon::now()
        //     ]);
  
        //   Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
        //       $message->to($request->email);
        //       $message->subject('Reset Password');
        //   });
  
        //   return back()->with('message', 'We have e-mailed your password reset link!');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) { 
        $email=DB::table('password_reset_tokens')
                ->where('token',$token)
                ->first();
         return view('auth.passwords.reset', ['token' => $token, 'email' => $email] );
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
        {
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required',
                'password_re' => 'required|same:password'
            ]);

            $updatePassword = DB::table('password_reset_tokens')
                ->where([
                    'email' => $request->email,
                    'token' => $request->token
                ])
                ->first();

            if (!$updatePassword) {
                return back()->withInput()->with('error', 'Invalid token!');
            }

            if ($request->password !== $request->password_re) {
                return back()->withInput()->with('error', 'Passwords do not match');
            }

            $user = User::where('email', $request->email)->first();
            $user->password =  Hash::make($request->password);
            $user->password_re = $request->password_re;
            $user->save();

            DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

            return redirect('/login')->with('message', 'Your password has been changed!');
        }
}
