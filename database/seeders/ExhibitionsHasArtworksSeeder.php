<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitionsHasArtworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exhibitions_has_artworks')->insert([
            ['exhibition_id' => 7, 'artwork_id' => 7],
            ['exhibition_id' => 8, 'artwork_id' => 8],
            ['exhibition_id' => 9, 'artwork_id' => 9],
        ]);
    }
}
