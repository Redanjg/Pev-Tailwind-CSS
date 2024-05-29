<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;
use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\User;

class MediaController extends Controller
{
    public function allmedia()
    {
        $media = $media = Media::whereHas('media_dt', function ($query) {
            $query->where('type', 4);
        })->get();
        return view('dashboard.admin.media.all', compact('media'));
    }

    public function accepted()
    {
        $media = Media::whereHas('media_dt', function ($query) {
            $query->where('status', 2);
            $query->where('type', 4);
        })->get();
       
        return view('dashboard.admin.media.accepted', compact('media'));
    }

    public function decline()
    {
        $media = Media::whereHas('media_dt', function ($query) {
            $query->where('status', 3);
            $query->where('type', 4);
        })->get();
       
        return view('dashboard.admin.media.decline', compact('media'));
    }

    public function destroy($id)
    {
        $media = User::find($id);
        // $media = new Media;
        $media->status = 3;
        $media->save();
        return redirect()->back()->with('message', 'Media Decline');
    }

    public function acc($id)
    {
        $media = User::find($id);
        // $media = new Media;
        $media->status = 2;
        $media->save();
        return redirect()->back()->with('message', 'Media Accepted');
    }

}
