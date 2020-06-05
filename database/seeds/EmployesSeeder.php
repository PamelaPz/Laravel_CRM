<?php

use App\Employe;
use Illuminate\Database\Seeder;

class EmployesSeeder extends Seeder
{
    public function run()
    {
        Employe::create([
            'name' => 'Jorge',
            'lastname' => 'de la Oz',
            'email' => 'oz.jorge@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Pamela',
            'lastname' => 'Pérez',
            'email' => 'pamela.perez@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        Employe::create([
            'name' => 'Eduardo',
            'lastname' => 'López',
            'email' => 'eduardo.lopez@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        Employe::create([
            'name' => 'Vladimir',
            'lastname' => 'Paz Juárez',
            'email' => 'vladir_paz2576@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Andrea',
            'lastname' => 'Juces Beanth',
            'email' => 'andrea.juces7@gmail.com',
            'password' => bcrypt('123'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Enrique',
            'lastname' => 'García',
            'email' => 'enrique.garcia@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        Employe::create([
            'name' => 'Melani',
            'lastname' => 'Sánchez',
            'email' => 'melani.sanchez@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        Employe::create([
            'name' => 'Karol',
            'lastname' => 'López',
            'email' => 'karol.lopez@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Eduardo',
            'lastname' => 'Pacheco',
            'email' => 'lalo.pacheco@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Julian',
            'lastname' => 'Gómez',
            'email' => 'julian.gomez@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Veyker Aldair',
            'lastname' => 'Ruiz',
            'email' => 'alda.vey.ruiz@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Karen',
            'lastname' => 'Basto Pico',
            'email' => 'karen.basto@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);

        Employe::create([
            'name' => 'Yohana',
            'lastname' => 'Delgado Contreras',
            'email' => 'yohana.delgado@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
        ]);
    }
}
