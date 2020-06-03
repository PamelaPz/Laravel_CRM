<?php

use App\Car;
use App\User;
use App\Product;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    public function run()
    {
        $id_user = User::where('id', '2')->value('id');
        $id_product_1 = Product::where('name', 'Taco de bisteck')->value('id');
        $id_product_2 = Product::where('name', 'Pay de Limón')->value('id');
        // dd($id_product_2);

        Car::create([
            'quantity' => '2',
            'product_id' => $id_product_1,
            'usuario_id' => $id_user,
        ]);

        Car::create([
            'quantity' => '5',
            'product_id' => $id_product_2,
            'usuario_id' => $id_user,
        ]);

        Car::create([
            'quantity' => '1',
            'product_id' => $id_product_1,
            'usuario_id' => $id_user,
        ]);

    }
}
