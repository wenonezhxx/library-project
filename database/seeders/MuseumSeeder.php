<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MuseumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('museums')->insert([
            [
                'name' => 'Музей современного искусства',
                'country_id' => 1,
            ],
            [
                'name' => 'Галерея современного искусства',
                'country_id' => 2,
            ],
            [
                'name' => 'Музей уличного искусства',
                'country_id' => 3,
            ],
        ]);
    }
}
