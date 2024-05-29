<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Str;
use App\Http\Controllers\Controller;
use App\Models\Exhibitor;

class ExhibitorController extends Controller
{
    public function index()
    {
        $exh = Exhibitor::all();
        return view('dashboard.admin.exhibitor.list', compact('exh'));
    }
    
    public function store(Request $request)
    {
        $img = $request->file('img');


        $datenow = date('YmdHis');
        if($img){
            $ext      = $img->getClientOriginalExtension();
            $name      = $img->getClientOriginalName();
            $filename = Str::slug($name).'-'.$datenow.'.'.$ext;
        }

        $exh = new Exhibitor();
        $exh->image = $filename;
        $exh->name = $request->name;
        $exh->save();

        if($img){
            $img->storeAs('public/exhibitor/'.$exh->id.'/',$filename);
        }

        return redirect()->back()->with('message', 'Upload success!');


    }
}
