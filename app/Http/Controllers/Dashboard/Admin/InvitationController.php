<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\TicketDT;
use App\Models\TicketHD;
use App\Models\Type;
use App\Traits\Barcode;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    use Barcode;

    public function index()
    {
        $data = TicketHD::whereNotIn('category', [3])->orderByDesc('created_at')->get();

        $ctgs = Type::where('type', 1)->get();

        $types = Type::where('type', 5)->get();

        return view('dashboard.admin.invitation.list', compact('ctgs', 'types','data'));
    }

    public function store(Request $request)
    {
        $booking_id = $this->code(10);

        $hd = new TicketHD();
        $hd->booking_no = $booking_id;
        $hd->name = $request->name;
        $hd->category = $request->ctg; //tipe code, sgi, undangan atau tiket
        $hd->type = $request->type;
        $hd->pic = $request->pic;
        $hd->status = 2;
        $hd->qty = $request->qty;
        $hd->save();

        

        $hd_id = $hd->id;
        $ticket_code = Type::where('id', $request->ctg)->first();

        for ($i = 0; $i < $request->qty; $i++) {
            $code = $this->code(10);

            $dts = new TicketDT();
            $dts->invitation_id = $hd_id;
            $dts->barcode = $ticket_code->code . $code;
            $dts->category_id = $request->ctg;
            $dts->save();
        }

        return redirect()->back()->with('message', 'Create invitation success!');
    }

    public function destroy($id)
    {
        $dti = TicketDT::where('invitation_id', $id)->delete();
        $hdi = TicketHD::find($id)->delete();
        return redirect()->back()->with('message', 'Delete Success!');
    }
}
