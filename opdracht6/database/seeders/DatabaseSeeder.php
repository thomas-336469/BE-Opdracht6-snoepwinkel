<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(MagazijnSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductPerAllergeenSeeder::class);
        $this->call(AllergeenSeeder::class);
        $this->call(ProductPerLeverancierSeeder::class);
        $this->call(LeverancierSeeder::class);
    }
}
