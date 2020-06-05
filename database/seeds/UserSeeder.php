<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Jessica',
            'lastname' => 'Pérez Pérez',
            'email' => 'jesypame321@gmail.com',
            'password' => bcrypt('pamela'),
        ]);

        User::create([
            'name' => 'Pedro',
            'lastname' => 'Juárez García',
            'email' => 'pedro22@gmail.com',
            'password' => bcrypt('pedro'),
        ]);

        User::create([
            'name' => 'Beatriz',
            'lastname' => 'García Pacheco',
            'email' => 'bety_garcía@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Julia',
            'lastname' => 'López Ruiz',
            'email' => 'juliyta_lopz@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Martín',
            'lastname' => 'Sánchez Contreras',
            'email' => 'martin.S88@gmail.com',
            'password' => bcrypt('martin'),
        ]);

        User::create([
            'name' => 'Sofia',
            'lastname' => 'Jaramillo Figueroa',
            'email' => 'sofi_jaramillo.f@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Stifer Yajaira',
            'lastname' => 'Orduz Soto',
            'email' => 'ortiz.stifer@gmail.com',
            'password' => bcrypt('martin'),
        ]);

        User::create([
            'name' => 'Estefanny',
            'lastname' => 'Fonseca Cardenas',
            'email' => 'stefanny.fonse55@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Dayanna',
            'lastname' => 'Suárez Maldonado',
            'email' => 'dayiana.ss09-mal@gmail.com',
            'password' => bcrypt('martin'),
        ]);

        User::create([
            'name' => 'Angie',
            'lastname' => 'Delgado Almeyda',
            'email' => 'delgado_angiee@gmail.com',
            'password' => bcrypt('bety'),
        ]);

        User::create([
            'name' => 'Yulieth Daniela',
            'lastname' => 'Zabala Rodríguez',
            'email' => 'yul.zabala2@gmail.com',
            'password' => bcrypt('martin'),
        ]);
    }
}
