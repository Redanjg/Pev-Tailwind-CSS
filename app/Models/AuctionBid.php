<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionBid extends Model
{
    use HasFactory;
    protected $table = 'auction_bid';
    public function BidAuction()
    {
        return $this->belongsTo('App\Models\AuctionItem', 'item_id');
    }
    public function BidToUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
