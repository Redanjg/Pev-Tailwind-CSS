<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketHD extends Model
{
    use HasFactory;

    protected $table = "ticket_hd";

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function dt()
    {
        return $this->hasMany('App\Models\TicketDT', 'invitation_id');
    }
    public function HdCategory()
    {
        return $this->belongsTo('App\Models\Type', 'category');
    }
    public function HdType()
    {
        return $this->belongsTo('App\Models\Type', 'type');
    }
}
