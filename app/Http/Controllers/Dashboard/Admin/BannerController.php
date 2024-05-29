<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class BannerController extends Controller
{
    public function index()
    {
        // $banner = Banner::where('year', 2024)->get();
        $banner = Banner::all();
        return view('dashboard.admin.banner.list', compact('banner'));
    }

    public function store(Request $request)
    {
        $img = $request->file('img');
        $img_mobile = $request->file('img_mobile');

        $validator = Validator::make($request->all(), [
            'img' => ['max:2000'],
            'img_mobile' => ['max:2000'],
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $datenow = date('YmdHis');
        if($img){
            $ext      = $img->getClientOriginalExtension();
            $filename = 'Banner Desktop - '.$datenow.'.'.$ext;
        }

        if($img_mobile){
            $ext2      = $img_mobile->getClientOriginalExtension();
            $name2      = $img_mobile->getClientOriginalName();
            $filename2 = 'Banner Mobile - '.$datenow.'.'.$ext2;
        }

        $banner = new Banner();
        $banner->img = $filename;
        if (isset($filename2)) {
        $banner->img_mobile = $filename2;
        }
        $banner->placement = $request->placement;
        $banner->order = $request->order;
        $banner->link = $request->link;
        $banner->partner_type = $request->partner_type;
        $banner->year = 2024;
        $banner->save();

        if($img){
            $img->storeAs('public/banner/'.$banner->id.'/',$filename);
            $filepathBanner = 'banner/' . $banner->id . '/' . $filename;
            // $pathBanner = Storage::disk('s3')->put($filepathBanner, file_get_contents($img), 'public');
        }

        if($img_mobile){
            $img_mobile->storeAs('public/banner/'.$banner->id.'/',$filename2);
            $filepathBannerM = 'banner/' . $banner->id . '/' . $filename;
            // $pathMobile = Storage::disk('s3')->put($filepathBannerM, file_get_contents($img_mobile), 'public');
        }

        return redirect()->back()->with('message', 'Upload success!');
    }


    public function update(Request $request, $id)
    {
        $img = $request->file('img');
        $img_mobile = $request->file('img_mobile');

        $validator = Validator::make($request->all(), [
            'img' => ['max:2000'],
            'img_mobile' => ['max:2000'],
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $datenow = date('YmdHis');
        if($img){
            $ext      = $img->getClientOriginalExtension();
            $name      = $img->getClientOriginalName();
            $filename = Str::slug($name).'-'.$datenow.'.'.$ext;
        }

        if($img_mobile){
            $ext2      = $img_mobile->getClientOriginalExtension();
            $name2      = $img_mobile->getClientOriginalName();
            $filename2 = Str::slug($name2).'-'.$datenow.'.'.$ext2;
        }

        $banner = Banner::find($id);
        $banner->img = $filename;
        $banner->img_mobile = $filename2;
        $banner->placement = $request->placement;
        $banner->order = $request->order;
        $banner->link = $request->link;
        $banner->save();

        if($img){
            $img->storeAs('public/banner/'.$banner->id.'/',$filename);
            $filepathBanner = 'banner/' . $banner->id . '/' . $filename;
            // $pathBanner = Storage::disk('s3')->put($filepathBanner, file_get_contents($img), 'public');
        }

        if($img_mobile){
            $img_mobile->storeAs('public/banner/'.$banner->id.'/',$filename2);
            $filepathBannerM = 'banner/' . $banner->id . '/' . $filename;
            // $pathMobile = Storage::disk('s3')->put($filepathBannerM, file_get_contents($img_mobile), 'public');
        }

        return redirect()->back()->with('message', 'Edit success!');
    }

    public function destroy($id)
    {
        $banner = Banner::find($id)->delete();
        return redirect()->back()->with('message', 'Delete success');
    }

}
