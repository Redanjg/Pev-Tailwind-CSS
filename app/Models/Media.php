<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media_data';

    public function media_dt()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
