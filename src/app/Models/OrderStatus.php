<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'order_status';

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
