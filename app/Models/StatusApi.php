<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusApi extends Model
{
    use HasFactory;
    protected $table = 'status_api';
    public function statusApi()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
}
