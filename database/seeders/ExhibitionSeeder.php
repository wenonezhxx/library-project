<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exhibitions')->insert([
            [
                'name' => 'Фестиваль уличного искусства',
                'museum_id' => 7,
            ],
            [
                'name' => 'Мир граффити',
                'museum_id' => 8,
            ],
            [
                'name' => 'Искусство на стенах',
                'museum_id' => 9,
            ],
        ]);
    }
}
