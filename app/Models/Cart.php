<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function productCart()
    {
        return $this->hasMany(ProductCard::class, 'cart_id');
    }
}
