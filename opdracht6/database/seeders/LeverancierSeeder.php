<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leveranciers')->insert([
            'naam' => 'Venco',
            'contactpersoon' => 'Bert van Linge',
            'leverancier_nummer' => 'L1029384719',
            'mobiel' => '06-28493827',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Astra Sweets',
            'contactpersoon' => 'Jasper del Monte',
            'leverancier_nummer' => 'L1029284315',
            'mobiel' => '06-39398734',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Haribo',
            'contactpersoon' => 'Sven Stalman',
            'leverancier_nummer' => 'L1029324748',
            'mobiel' => '06-24383291',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Basset',
            'contactpersoon' => 'Joyce Stelterberg',
            'leverancier_nummer' => 'L1023845773',
            'mobiel' => '06-48293823',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'De Bron',
            'contactpersoon' => 'Remco Veenstra',
            'leverancier_nummer' => 'L1023857736',
            'mobiel' => '06-34291234',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
