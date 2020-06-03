<?php

use App\TypeProduct;
use Illuminate\Database\Seeder;

class TypeProductsSeeder extends Seeder
{
    public function run()
    {
        TypeProduct::create([
            'type' => 'Pozole'
        ]);

        TypeProduct::create([
            'type' => 'Tacos'
        ]);

        TypeProduct::create([
            'type' => 'Pizza'
        ]);

        TypeProduct::create([
            'type' => 'Hot Dog'
        ]);

        TypeProduct::create([
            'type' => 'Bebida'
        ]);

        TypeProduct::create([
            'type' => 'Postre'
        ]);
    }
}
