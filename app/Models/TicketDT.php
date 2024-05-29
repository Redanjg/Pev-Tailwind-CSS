<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDT extends Model
{
    use HasFactory;

    protected $table = "ticket_dt";

    public function ctg()
    {
        return $this->belongsTo('App\Models\Type','category_id');
    }

    public function hd()
    {
        return $this->belongsTo('App\Models\TicketHD','invitation_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
