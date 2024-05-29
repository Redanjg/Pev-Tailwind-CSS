<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public function OrderType()
    {
        return $this->belongsTo('App\Models\Payment', 'type_order');
    }
    public function OrderUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function statusApi()
    {
        return $this->hasOne('App\Models\StatusApi', 'order_id');
    }
    public function OrderPaymentType()
    {
        return $this->belongsTo('App\Models\PaymentType', 'payment', 'prefix');
    }
}
