<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MateriSeminar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class MateriSeminarController extends Controller
{
    public function index()
    {
        $materi = MateriSeminar::all();
        return view('dashboard.admin.materi-seminar.list', compact('materi'));
    }

    public function store(Request $request)
    {
        $file = $request->file('file');

        $rename = 'file-' . Str::slug($request->name) . '-' . date('YmdHis') . '.' . $file->getClientOriginalExtension();

        $mtr = new MateriSeminar();
        $mtr->name = $request->name;
        $mtr->file = $rename;
        $mtr->date = $request->date;
        $mtr->save();

        $file->storeAs('public/materi-seminar/' . $mtr->id . '/', $rename);
        return redirect()->back()->with('message', 'Materi Seminar Added');
    }

    public function destroy($id)
    {
        $mtr = MateriSeminar::find($id)->delete();
        return redirect()->back()->with('message', 'Materi Seminar Deleted');
    }
}
