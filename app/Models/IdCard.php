<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdCard extends Model
{
    use HasFactory;

    protected $table = 'idcard_hd';

    public function id_dt()
    {
        return $this->hasMany('App\Models\IdCardDT','hd_id');
    }

    public function id_type()
    {
        return $this->belongsTo('App\Models\Type','type')->where('category', 'id_card');
    }
}
