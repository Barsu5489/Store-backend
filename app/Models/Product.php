<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the images associated with the product.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the carts that have added the product.
     */
    public function carts()
    {
        return $this->belongsTo(Cart::class);
    }

    /**
     * Get the orders that include the product.
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    /**
     * Get the payments made for the product.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}

