<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPerLeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 1,
            'datum_levering' => '2023-04-09',
            'aantal' => 23,
            'datum_eerstvolgende_levering' => '2023-04-16',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 1,
            'datum_levering' => '2023-04-18',
            'aantal' => 21,
            'datum_eerstvolgende_levering' => '2023-04-25',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 2,
            'datum_levering' => '2023-04-09',
            'aantal' => 12,
            'datum_eerstvolgende_levering' => '2023-04-16',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 3,
            'datum_levering' => '2023-04-10',
            'aantal' => 11,
            'datum_eerstvolgende_levering' => '2023-04-17',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 4,
            'datum_levering' => '2023-04-14',
            'aantal' => 16,
            'datum_eerstvolgende_levering' => '2023-04-21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 4,
            'datum_levering' => '2023-04-21',
            'aantal' => 23,
            'datum_eerstvolgende_levering' => '2023-04-28',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 5,
            'datum_levering' => '2023-04-14',
            'aantal' => 45,
            'datum_eerstvolgende_levering' => '2023-04-21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 6,
            'datum_levering' => '2023-04-14',
            'aantal' => 30,
            'datum_eerstvolgende_levering' => '2023-04-21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 7,
            'datum_levering' => '2023-04-12',
            'aantal' => 12,
            'datum_eerstvolgende_levering' => '2023-04-19',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 7,
            'datum_levering' => '2023-04-19',
            'aantal' => 23,
            'datum_eerstvolgende_levering' => '2023-04-26',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 8,
            'datum_levering' => '2023-04-10',
            'aantal' => 12,
            'datum_eerstvolgende_levering' => '2023-04-17',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 9,
            'datum_levering' => '2023-04-11',
            'aantal' => 1,
            'datum_eerstvolgende_levering' => '2023-04-18',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 4,
            'product_id' => 10,
            'datum_levering' => '2023-04-16',
            'aantal' => 24,
            'datum_eerstvolgende_levering' => '2023-04-30',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 11,
            'datum_levering' => '2023-04-10',
            'aantal' => 47,
            'datum_eerstvolgende_levering' => '2023-04-17',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 11,
            'datum_levering' => '2023-04-19',
            'aantal' => 60,
            'datum_eerstvolgende_levering' => '2023-04-26',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 12,
            'datum_levering' => '2023-04-11',
            'aantal' => 45,
            'datum_eerstvolgende_levering' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 13,
            'datum_levering' => '2023-04-12',
            'aantal' => 23,
            'datum_eerstvolgende_levering' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
