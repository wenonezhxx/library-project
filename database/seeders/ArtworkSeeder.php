<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artworks')->insert([
            [
                'name' => 'Городские джунгли',
                'artist_id' => 7,
                'genre_id' => 4,
                'material_id' => 7,
            ],
            [
                'name' => 'Цвета мегаполиса',
                'artist_id' => 8,
                'genre_id' => 5,
                'material_id' => 8,
            ],
            [
                'name' => 'Уличная энергия',
                'artist_id' => 9,
                'genre_id' => 6,
                'material_id' => 9,
            ],
        ]);
    }
}
