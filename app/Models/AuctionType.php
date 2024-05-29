<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionType extends Model
{
    use HasFactory;
    protected $table = 'auction_type';
    public function TypeAuction()
    {
        return $this->hasMany('App\Models\AuctionItem', 'jenis_barang');
    }
}
