<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MagazijnSeeder extends Seeder
{
    public function run()
    {
        DB::table('magazijns')->insert([
            'product_id' => 1,
            'verpakkings_eenheid' => 5,
            'aantal_aanwezig' => 453,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 2,
            'verpakkings_eenheid' => 2.5,
            'aantal_aanwezig' => 400,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 3,
            'verpakkings_eenheid' => 5,
            'aantal_aanwezig' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 4,
            'verpakkings_eenheid' => 1,
            'aantal_aanwezig' => 800,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 5,
            'verpakkings_eenheid' => 3,
            'aantal_aanwezig' => 234,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 6,
            'verpakkings_eenheid' => 2,
            'aantal_aanwezig' => 345,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 7,
            'verpakkings_eenheid' => 1,
            'aantal_aanwezig' => 795,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 8,
            'verpakkings_eenheid' => 10,
            'aantal_aanwezig' => 233,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 9,
            'verpakkings_eenheid' => 2.5,
            'aantal_aanwezig' => 123,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 10,
            'verpakkings_eenheid' => 3,
            'aantal_aanwezig' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 11,
            'verpakkings_eenheid' => 2,
            'aantal_aanwezig' => 367,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 12,
            'verpakkings_eenheid' => 1,
            'aantal_aanwezig' => 467,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 13,
            'verpakkings_eenheid' => 5,
            'aantal_aanwezig' => 20,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
