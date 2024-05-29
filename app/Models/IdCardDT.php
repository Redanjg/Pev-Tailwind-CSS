<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdCardDT extends Model
{
    use HasFactory;

    protected $table = 'idcard_dt';

    public function type_id()
    {
        return $this->belongsTo('App\Models\Type','type')->where('category', 'id_card');
    }
}
