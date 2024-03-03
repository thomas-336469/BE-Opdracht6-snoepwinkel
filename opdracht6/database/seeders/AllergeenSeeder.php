<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AllergeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allergeens')->insert([
            'naam' => 'Gluten',
            'omschrijving' => 'Dit product bevat gluten',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Gelatine',
            'omschrijving' => 'Dit product bevat gelatine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'AZO-Kleurstof',
            'omschrijving' => 'Dit product bevat AZO-kleurstoffen',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Lactose',
            'omschrijving' => 'Dit product bevat lactose',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Soja',
            'omschrijving' => 'Dit product bevat soja',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
