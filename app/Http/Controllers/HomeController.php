<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\TicketDT;
use App\Models\TicketHD;
use App\Models\SeminarDT;
use App\Models\ScanSeminar;
use App\Models\Media;
use App\Models\Relase;
use App\Models\Gallery;
use App\Models\MateriSeminar;
use App\Models\Banner;
use App\Models\Program;

class HomeController extends Controller
{

    public function index()
    {   
        $prog = Program::all();
        $banner = Banner::where('placement', 1)->where('year', 2024)->get();
        return view('welcome', compact('banner', 'prog'));
    }


    public function listseminar()
    {
        $list = ScanSeminar::all();

        return view('scan-seminar.list', compact('list'));
    }
    

    public function pressrelease()
    {
        $title = 'PEV 2024 - PRESS RELEASE';
        $release = Relase::orderByDesc('publish')->get();
        $gallery = Gallery::inRandomOrder()->limit(5)->get();

        return view('press.release', compact('release', 'gallery'));

    }

    
    public function getAllInvitation()
    {
        $data = TicketHD::whereNotIn('category', [3])->orderByDesc('created_at')->get();

    }

    public function code_list($id, $enc)
    {
        $secure = md5($id);
        if ($enc != $secure) {
            return redirect('/');
        }

        $data = TicketHD::where('id', $id)->first();
        return view('ticket.code-list', compact('data'));
    }
    
    public function MateriSeminar()
    {
        $materi = MateriSeminar::all();
        return view('materi-seminar', compact('materi'));
    }
    
    public function DetailMateriSeminar($id)
    {
        $materi = MateriSeminar::find($id);
        return view('detail-materi-seminar', compact('materi'));
    }

    public function exhibitor()
    {
        $banner = Banner::where('placement', 2)->where('year', 2024)->get();

        return view('our-exhibitor', compact('banner'));
    }
}
