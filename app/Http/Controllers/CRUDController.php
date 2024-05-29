<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index()
    {
        $prog = Program::all();
        return view('dashboard.admin.program.list', compact('prog'));
    }
}
