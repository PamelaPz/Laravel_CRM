<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    //Genera una relación con el tipo de producto y obtiene una colección
    public function product() {
        return $this->hasMany(Product::class, 'type_products_id');
    }
}
