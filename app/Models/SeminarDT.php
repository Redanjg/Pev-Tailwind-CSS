<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarDT extends Model
{
    use HasFactory;

    protected $table = "seminar_dt";

    public function detail()
    {
        return $this->belongsTo('App\Models\Type','schedule_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
