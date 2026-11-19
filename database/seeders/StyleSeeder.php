<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('styles')->insert([
            ['name' => 'Поп-арт'],
            ['name' => 'Минимализм'],
            ['name' => 'Экспрессионизм'],
        ]);
    }
}
