<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use HasFactory, SoftDeletes;
    use HasFactory;

    public $timestamps = false;

    public function orders(){
        return $this->hasMany(Order::class, 'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
