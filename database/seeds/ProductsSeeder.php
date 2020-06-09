<?php

use App\Product;
use App\StatusCar;
use App\TypeProduct;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $type_product_pozole = TypeProduct::where('type', 'Pozole')->value('id');
        $type_product_tacos = TypeProduct::where('type', 'Tacos')->value('id');
        $type_product_postre = TypeProduct::where('type', 'Postre')->value('id');
        $type_product_bebida = TypeProduct::where('type', 'Bebida')->value('id');
        // $status_car = StatusCar::where('status', 'N')->value('id');

        Product::create([
            'name' => 'Pozole rojo',
            'price' => 150,
            'type_products_id' => $type_product_pozole,
            // 'status_product_id' => $status_car
        ]);

        Product::create([
            'name' => 'Pozole verde',
            'price' => 140,
            'type_products_id' => $type_product_pozole,
            // 'status_product_id' => $status_car
        ]);

        Product::create([
            'name' => 'Taco de bisteck',
            'price' => 15,
            'type_products_id' => $type_product_tacos,
            // 'status_product_id' => $status_car
        ]);

        Product::create([
            'name' => 'Taco de suadero',
            'price' => 16,
            'type_products_id' => $type_product_tacos,
            // 'status_product_id' => $status_car
        ]);

        Product::create([
            'name' => 'Taco de chorizo',
            'price' => 15,
            'type_products_id' => $type_product_tacos,
            // 'status_product_id' => $status_car
        ]);

        Product::create([
            'name' => 'Pay de Limón',
            'price' => 30,
            'type_products_id' => $type_product_postre,
            // 'status_product_id' => $status_car
        ]);

        Product::create([
            'name' => 'Coca Cola Zero',
            'price' => 18,
            'type_products_id' => $type_product_bebida,
            // 'status_product_id' => $status_car
        ]);
    }
}
