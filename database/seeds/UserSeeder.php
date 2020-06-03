<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Jessica',
            'lastname' => 'Pérez',
            'email' => 'jesypame321@gmail.com',
            'password' => bcrypt('pamela'),
        ]);

        User::create([
            'name' => 'Pedro',
            'lastname' => 'Juárez',
            'email' => 'pedro22@gmail.com',
            'password' => bcrypt('pedro'),
        ]);

        User::create([
            'name' => 'Beatriz',
            'lastname' => 'García',
            'email' => 'bety_garcía@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Julia',
            'lastname' => 'López',
            'email' => 'juliyta_lopz@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Martín',
            'lastname' => 'Sánchez',
            'email' => 'martin.S88@gmail.com',
            'password' => bcrypt('martin'),
        ]);
    }
}
