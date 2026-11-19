<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsHasTechniquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists_has_techniques')->insert([
            ['artist_id' => 7, 'technique_id' => 7],
            ['artist_id' => 8, 'technique_id' => 8],
            ['artist_id' => 9, 'technique_id' => 9],
        ]);
    }
}
