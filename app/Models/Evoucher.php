<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evoucher extends Model
{
    use HasFactory;

    protected $table = 'evoucher';


    public function evoucher() {
        return $this->belongsTo('App\Models\Exhibitor', 'exh_id');

    }

    public function ctg()
    {
        return $this->belongsTo('App\Models\Type','category_id');
    }
}
