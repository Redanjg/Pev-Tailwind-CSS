<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    use HasFactory;

    protected $table = 'exhibitor';


    public function evoucher() {
        return $this->hasMany('App\Models\Evoucher','exh_id');

    }
}
