<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            [
                'name' => 'Дмитрий Орлов',
                'country_id' => 1,
                'style_id' => 4,
            ],
            [
                'name' => 'Алексей Морозов',
                'country_id' => 2,
                'style_id' => 5,
            ],
            [
                'name' => 'Екатерина Белова',
                'country_id' => 3,
                'style_id' => 6,
            ],
        ]);
    }
}
