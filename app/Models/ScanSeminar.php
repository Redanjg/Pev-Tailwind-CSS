<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScanSeminar extends Model
{
    use HasFactory;

    protected $table = 'scan_seminar';

    public function user_visit()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
