<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionItem extends Model
{
    use HasFactory;
    protected $table = 'auction_item';
    public function AuctionToType()
    {
        return $this->belongsTo('App\Models\AuctionType', 'jenis_barang');
    }
    public function AuctionToBid()
    {
        return $this->hasMany('App\Models\AuctionBid', 'item_id');
    }
    public function AuctionGallery()
    {
        return $this->hasMany('App\Models\AuctionGallery', 'item_id');
    }
}
