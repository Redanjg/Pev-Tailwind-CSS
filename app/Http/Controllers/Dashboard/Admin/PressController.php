<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Relase;
use Str;


class PressController extends Controller
{
    public function index()
    {
        $rel = Relase::all();
        return view('dashboard/admin/press/list', compact('rel'));
    }

    public function create()
    {
        return view('dashboard/admin/press/add');
    }

public function store(Request $request)
    {
        $doc = $request->file('release');

        if ($doc) {
            $ext     = $doc->getClientOriginalExtension();
            $nama    = $doc->getClientOriginalName();
            $filename = 'Doc-' . Str::slug($request->title) . '.' . $ext;
        }
        $rel = new Relase();
        $rel->title = $request->title;
        $rel->status = $request->stat;
        $rel->publish = $request->date;
        if ($doc) {
            $rel->file = $filename;
        }
        $rel->save();
        
        if ($doc) {
            $doc->storeAs('public/release/' . $rel->id . '/', $filename);
        }

        return redirect('home/press')->with('message', 'Input Success!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rel = Relase::find($id);
        return view('dashboard.admin.press.view', compact('rel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rel = Relase::find($id);
        if (request()->page == 'add-gallery') {
            $image = $request->file('image');

            if ($image) {
                $ext      = $image->getClientOriginalExtension();
                $nama     = $image->getClientOriginalName();
                $filename = Str::slug($nama) . '.' . $ext;
            }
            $img = new Gallery();
            $img->release_id = $id;
            $img->name = $request->name;
            $img->type = 2;
            if ($image) {
                $img->img = $filename;
            }
            $img->save();
            if ($image) {
                $image->storeAs('public/images/release/' . $id . '/', $filename);
            }

            return redirect()->back()->with('message', 'Sukses menambahkan foto');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rel = Relase::find($id)->delete();
        return redirect()->back()->with('message', 'Sukses menghapus data');
    }
    public function destroygal($id)
    {
        $gal = Gallery::find($id)->delete();
        return redirect()->back()->with('message', 'Sukses menghapus data');
    }
}
