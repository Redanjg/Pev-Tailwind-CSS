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

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $media = Media::whereHas('media_dt', function ($query) {
            $query->where('type', 4);
        })->get();
        
        $mediaacc = Media::whereHas('media_dt', function ($query) {
            $query->where('status', 2);
            $query->where('type', 4);
        })->get();

        $mediadec = Media::whereHas('media_dt', function ($query) {
            $query->where('status', 3);
            $query->where('type', 4);
        })->get();

        $mediareg = TicketDT::where('category_id', 19)->Where('scan_in', 1)->get();
        return view('dashboard.home', compact('media', 'mediareg', 'mediaacc', 'mediadec'));
    }

    public function listopcerparti()
    {
        $user = TicketDT::where('category_id', 19)->Where('scan_in', 1)->get();
        // $hd = TicketHD::all();
        return view('dashboard/admin/opcer-parti', compact('user'));
        
        // return view('dashboard/admin/opcer-parti', compact('hd'));
    }

    

    public function listparticipant()
    {
        $seminar = SeminarDT::all();
        return view('dashboard.admin.seminar.list', compact('seminar'));
    }

    public function listscanseminar()
    {
        $list = ScanSeminar::all();
        return view('dashboard.admin.scan-seminar.list', compact('list'));
    }
    
    public function getAllInvitation()
    {
        $data = TicketHD::whereNotIn('category', [3])->orderByDesc('created_at')->get();

    }

    public function admin()
    {
        $media = User::where('type', 4)->whereHas('media_dt', function ($q) {
            $q->where('year', 2024);
        })->get();
        $mediareg = TicketDT::where('category_id', 19)->Where('scan_in', 1)->get();
        return view('dashboard.admin.home', compact('media', 'mediareg'));
    }
}
