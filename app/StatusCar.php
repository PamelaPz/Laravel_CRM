<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusCar extends Model
{
    public function product()
    {
        return $this->hasMany(Product::class, 'status_product_id');
    }
}
