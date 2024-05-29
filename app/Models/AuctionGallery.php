<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionGallery extends Model
{
    use HasFactory;
    protected $table = 'auction_gallery';
    public function GalleryAuction()
    {
        return $this->belongsTo('App\Models\AuctionItem', 'item_id');
    }
}
