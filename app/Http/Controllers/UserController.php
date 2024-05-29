<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\Barcode;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
class UserController extends Controller
{
    use Barcode;
    public function register()
    {
        return view('auth/register');
    }

    public function PostMainRegister(Request $request)
    {
        $auction_code = $this->code(6);
        $check = User::where('code_auction', $auction_code)->first();
        $check_randoms = false;
        while (!$check_randoms) {
            if (!$check) {
                $auction_code = $auction_code;
                $check_randoms = true;
            } else {
                $auction_code = $this->code(6);
                $check = User::where('code_auction', $auction_code)->first();
                $check_randoms = false;
            }
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $user = new User();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->password_re = $request->password;
        $user->code_auction = $auction_code;
        $user->type = '0';
        $user->is_auction = '1';
        $user->save();

        if (Auth::check()) {
            Auth::logout();
        }

        $remember = true;
        Auth::login($user, $remember);
        $ckname = Auth::getRecallerName();

        // Cookie::queue($ckname, Cookie::get($ckname), 43200);
        

        return redirect('register')->with('message', 'Thank you for your registration');
    }


    public function login(){

        
    if (Auth::check()) {
        return redirect('home');
    }
    
    return view('auth/login')->with('message', 'You are not logged in');
    }

public function login_post(Request $request){
    // Validate email and password fields
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Attempt authentication
    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        // Authentication failed, add error message to the session
        // Check if email is incorrect
        if (!User::where('email', $request->email)->exists()) {
            $errors['email'] = 'This email address is not registered.';
        } else {
            $errors['password'] = 'The provided password is incorrect.';
        }
        
        // Redirect back with input and errors
        return redirect()->back()->withInput()->withErrors($errors);
    }
    
    // Regenerate session
    $request->session()->regenerate();

    // Redirect to home page upon successful login
    return redirect('home');
}


    public function logout()
    {
        // Session::flush();
        
        Auth::logout();

        return redirect('/');
        
    }
    

}
