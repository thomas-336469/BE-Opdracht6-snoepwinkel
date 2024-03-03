<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPerAllergeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 3,
            'allergeen_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 6,
            'allergeen_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 9,
            'allergeen_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 9,
            'allergeen_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 10,
            'allergeen_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 12,
            'allergeen_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
