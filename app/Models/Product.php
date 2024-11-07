<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_products')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }
    
}
