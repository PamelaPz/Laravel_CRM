<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function type_products() { //type_products_id
        return $this->belongsTo(TypeProduct::class);
    }

    public function status_product() { //status_product_id
        return $this->belongsTo(StatusCar::class);
    }
}
