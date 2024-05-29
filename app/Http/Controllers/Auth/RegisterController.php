<?php

namespace App\Http\Controllers\Auth;

use Str;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Media;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function pressregis()
    {
        return view('auth.press-regist');
    }

    public function save_press(Request $request)
    {


        $press_u = new User();
        $press_u->name = $request->name;
        $press_u->email = $request->email;
        $press_u->phone = $request->phone;
        $press_u->password = Hash::make($request->password);
        $press_u->password_re = $request->password;
        $press_u->type = '4';
        $press_u->save();

        $press_id = $request->file('press_id');
        $photo = $request->file('photo');
        $validator = Validator::make($request->all(), [
            'img' => ['max:2000'],
            'img_mobile' => ['max:2000'],
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        if($press_id){
            $ext      = $press_id->getClientOriginalExtension();
            $filename = 'Press_id - '.$press_u->name.'.'.$ext;
        }

        if($photo){
            $ext2      = $photo->getClientOriginalExtension();
            $filename2 = 'Press Photo - '.$press_u->name.'.'.$ext2;
        }

        $press = new Media();
        $press->press_id = $filename;
        if (isset($filename2)) {
        $press->photo = $filename2;
        }
        $press->user_id = $press_u->id;
        $press->email_redaksi = $request->email_redaksi;
        $press->media_name = $request->media_name;
        $press->position = $request->position;
        $press->phone = $request->phone;
        $press->year = 2024;
        $press->save();

        if($press_id){
            $press_id->storeAs('public/media/'.$press->id.'/',$filename);
            $filepathmedia = 'media/' . $press->id . '/' . $filename;
            // $pathBanner = Storage::disk('s3')->put($filepathBanner, file_get_contents($img), 'public');
        }

        if($photo){
            $photo->storeAs('public/media/'.$press->id.'/',$filename2);
            $filepathMediaphoto = 'media/' . $press->id . '/' . $filename;
            // $pathMobile = Storage::disk('s3')->put($filepathBannerM, file_get_contents($img_mobile), 'public');
        }


        return redirect()->back()->with('message', 'Registration success!');
    }
}
