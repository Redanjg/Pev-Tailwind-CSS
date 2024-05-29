<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProgramController extends Controller
{
    public function index()
    {
        $prog = Program::all();
        return view('dashboard/admin/program/list', compact('prog'));
    }

    public function create()
    {
        return view('dashboard/admin/program/add');
    }

    public function store(Request $request)
    {
        $thumb = $request->file('thumb');

        $datenow = date('YmdHis');
        
        if($thumb){
            $ext      = $thumb->getClientOriginalExtension();
            $filename = 'Thumbnail - '.$datenow.'.'.$ext;
        }

        $prog = new Program();
        $prog->title = $request->title;
        $prog->link = $request->link;
        $prog->thumbnail = $filename;
        $prog->descr = $request->description;
        $prog->start = $request->start;
        $prog->end = $request->end;
        $prog->save();

        if($thumb){
            $thumb->storeAs('public/program/'.$prog->id.'/',$filename);
            $filepath = 'program/' . $filename;
            //$pathMobile = Storage::disk('s3')->put($filepath, file_get_contents($thumb), 'public');
        }

        $message = 'Data successfuly added!';

        return redirect('/home/program')->with('message', $message);
    }

    public function edit($id)
    {
        $prog = Program::find($id);
        return view('dashboard/admin/program/edit', compact('prog'));
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        $thumb = $request->file('thumb');

        $datenow = date('YmdHis');
        if($thumb){
            $ext      = $thumb->getClientOriginalExtension();
            $filename = 'Thumbnail - '.$datenow.'.'.$ext;
        }

        $prog = Program::find($id);
        $prog->title = $request->title;
        $prog->link = $request->link;
        if ($thumb) {
            $prog->thumbnail = $filename;
        }
        $prog->descr = $request->description;
        $prog->start = $request->start;
        $prog->end = $request->end;
        $prog->save();

        if($thumb){
            $thumb->storeAs('public/program/'.$prog->id.'/',$filename);
            $filepath = 'public/program/' . $filename;
            // $pathMobile = Storage::disk('s3')->put($filepath, file_get_contents($thumb), 'public');
        }

        return redirect('/home/program')->with('message', 'Edit success!');
    }

    public function destroy($id)
    {
        $banner = Program::find($id)->delete();

        return redirect('/home/program')->with('message', 'Deleted successfuly!');

    }

}
