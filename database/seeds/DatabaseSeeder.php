<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTables([
            'users',
            'status_cars',
            'type_products',
            'products',
            'cars',
            'buys',
            'employes',
        ]);

        // Ejecuta los seeders:
        $this->call(UserSeeder::class);
        $this->call(StatusCarSeeder::class);
        $this->call(TypeProductsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(BuysSeeder::class);
        $this->call(EmployesSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
