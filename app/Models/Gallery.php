<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'prod_id');
    }

    public function release()
    {
        return $this->belongsTo('App\Models\Release', 'release_id');
    }
}
