<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'type_products_id',
        'status_product_id'
    ];

    public function type_products()
    {
        return $this->belongsTo(TypeProduct::class);
    }

    public function status_product()
    {
        return $this->belongsTo(StatusCar::class);
    }

    public function shoppingCarts()
    {
        return $this->belongsToMany(ShoppingCart::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
