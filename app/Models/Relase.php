<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relase extends Model
{
    use HasFactory;

    protected $table = 'release';

    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery', 'release_id');
    }
}
