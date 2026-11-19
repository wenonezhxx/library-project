<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('techniques')->insert([
            ['name' => 'Аэрозольная живопись'],
            ['name' => 'Трафаретная техника'],
            ['name' => 'Фреска'],
        ]);
    }
}
