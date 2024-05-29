<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuctionBid;
use App\Models\AuctionGallery;
use App\Models\AuctionItem;
use App\Models\AuctionType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class AuctionController extends Controller
{
    public function index()
    {
        $items = AuctionItem::all();
        $types = AuctionType::all();
        return view('dashboard.admin.auction.list', compact('items', 'types'));
    }

    public function store(Request $request)
    {
        $file_thumb = $request->file('thumb');
        $files_gallery = request()->file('gallery');
        if ($file_thumb) {
            $thumb = 'thumbnail-' . Str::slug($request->item_name) . date('YmdHis') . '.' . $file_thumb->getClientOriginalExtension();
        }
        $item = new AuctionItem();
        $item->user_id = auth()->user()->id;
        $item->slug =  Str::slug($request->item_name) . date('YmdHis');
        $item->jenis_barang = $request->type;
        $item->nama_barang = $request->item_name;
        $item->brand = $request->brand;
        $item->manufacture = $request->manufacture;
        $item->deskripsi_barang = $request->desc;
        $item->price = $request->price;
        $item->period = date('Y');
        if ($file_thumb) {
            $item->thumbnail = $thumb;
        }
        $item->status = 2;
        $item->save();
        if ($file_thumb) {
            $file_thumb->storeAs('public/auction/' . $item->id . '/thumbnail/', $thumb);
        }   
        if ($files_gallery) {
            $x = 0;
            foreach ($files_gallery as $file_gallery) {
                $rename_file = 'gallery-' . $item->slug . '-' . $x . '.' . $file_gallery->getClientOriginalExtension();

                $gallery = new AuctionGallery();
                $gallery->item_id = $item->id;
                $gallery->photo = $rename_file;
                $gallery->save();

                $file_gallery->storeAs('public/auction/' . $item->id . '/gallery/', $rename_file);
                $x++;
            }
        }
        return redirect()->back()->with('message', 'Items Added');
    }

    public function destroy($id)
    {
        $item = AuctionItem::find($id);
        $item->status = 1;
        $item->save();

        return redirect()->back()->with('message', 'Items Deleted');
    }
    
    public function ListBid($id)
    {
        $bids = AuctionBid::where('item_id', $id)->orderByDesc('price')->get();
        return view('dashboard.admin.auction.list-bid', compact('bids'));
    }

    public function auction()
    {
        $items = AuctionItem::all();

        return view('auction.all', compact('items'));
    }

    public function details($slug)
    {
        $item = AuctionItem::where('slug', $slug)->where('status', 2)->first();
        // return $item;
        if (!$item) {
            abort(404);
        }
        return view('auction.details', compact('item'));
    }
    public function PostBidAuction(Request $request, $id)
    {
        $user = User::find(auth()->user()->id);
        if ($user->code_auction == '') {
            $user->code_auction = $this->code(7);
            $user->save();
        }
        $check_bid = AuctionBid::where('item_id', $id)->get();
        if (!$check_bid->isEmpty()) {
            if ($request->bidding <= $check_bid->last()->price) {
                return redirect()->back()->with('message', 'Oops last bid is IDR.' . $check_bid->price);
            }
            $bid = new AuctionBid();
            $bid->user_id = $user->id;
            $bid->item_id = $id;
            $bid->price = $request->bidding;
            $bid->save();
            return redirect()->back()->with('message', 'Thank you for Joining our Auction');
        } else {
            $bid = new AuctionBid();
            $bid->user_id = $user->id;
            $bid->item_id = $id;
            $bid->price = $request->bidding;
            $bid->save();
            return redirect()->back()->with('message', 'Thank you for Joining our Auction');
        }
    }
}
