<?php

use App\Buy;
use App\Car;
use Illuminate\Database\Seeder;

class BuysSeeder extends Seeder
{
    public function run()
    {
        $user_id = Car::where('usuario_id', '2')->value('usuario_id');
        $car_id_1 = Car::where('id', '1')->value('id');
        $car_id_2 = Car::where('id', '2')->value('id');
        // dd($user_id);

        Buy::create([
            'city' => 'Querétaro',
            'address' => 'Los cabos, #20 Acceso 5, Verdes del sol.',
            'car_id' => $car_id_1,
            'user_id' => $user_id,
            'date_buy' => '2018-01-11 03:20:08'
        ]);

        Buy::create([
            'city' => 'Querétaro',
            'address' => 'Los cabos, #20 Acceso 5, Verdes del sol.',
            'car_id' => $car_id_2,
            'user_id' => $user_id,
            'date_buy' => '2020-06-03 10:23:37'
        ]);
    }
}
