<?php

use App\StatusCar;
use Illuminate\Database\Seeder;

class StatusCarSeeder extends Seeder
{
    public function run()
    {
        StatusCar::create([
            'status' => 'N',
        ]);

        StatusCar::create([
            'status' => 'Y',
        ]);
    }
}
