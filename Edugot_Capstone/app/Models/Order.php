<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function buyer(){
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }

    public function orderStatuss(){
        return $this->hasMany(OrderStatus::class, 'order_id');
    }
}
