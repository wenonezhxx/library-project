<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    DB::table('countries')->insert([
    ['name' => 'Италия'],
    ['name' => 'Испания'],
    ['name' => 'Япония'],
    ]);
    DB::table('styles')->insert([
    ['name' => 'Сюрреализм'],
    ['name' => 'Барокко'],
    ['name' => 'Готика'],
    ]);
    DB::table('materials')->insert([
    ['name' => 'Картон'],
    ['name' => 'Металл'],
    ['name' => 'Стекло'],
    ]);
    DB::table('techniques')->insert([
    ['name' => 'Гуашь'],
    ['name' => 'Граффити'],
    ['name' => 'Пастель'],
    ]);
    DB::table('genres')->insert([
    ['name' => 'Анималистика'],
    ['name' => 'Исторический жанр'],
    ['name' => 'Мифологический жанр'],
    ]);
    DB::table('artists')->insert([
    [
        'name' => 'Мария Волкова',
        'country_id' => 4,
        'style_id' => 4,
    ],
    [
        'name' => 'Александр Кузнецов',
        'country_id' => 5,
        'style_id' => 5,
    ],
    [
        'name' => 'Елена Морозова',
        'country_id' => 6,
        'style_id' => 6,
    ],
    ]);
    DB::table('museums')->insert([
    [
        'name' => 'Национальный музей Италии',
        'country_id' => 4,
    ],
    [
        'name' => 'Музей Прадо',
        'country_id' => 5,
    ],
    [
        'name' => 'Токийский национальный музей',
        'country_id' => 6,
    ],
    ]);
    DB::table('artworks')->insert([
    [
        'name' => 'Звёздная ночь',
        'artist_id' => 4,
        'genre_id' => 4,
        'material_id' => 4,
    ],
    [
        'name' => 'История древнего мира',
        'artist_id' => 5,
        'genre_id' => 5,
        'material_id' => 5,
    ],
    [
        'name' => 'Легенда о драконе',
        'artist_id' => 6,
        'genre_id' => 6,
        'material_id' => 6,
    ],
    ]);
    DB::table('exhibitions')->insert([
    [
        'name' => 'Искусство Италии',
        'museum_id' => 4,
    ],
    [
        'name' => 'Испанская живопись',
        'museum_id' => 5,
    ],
    [
        'name' => 'Искусство Японии',
        'museum_id' => 6,
    ],
    ]);
    DB::table('artists_has_techniques')->insert([
    [
        'artist_id' => 4,
        'technique_id' => 4,
    ],
    [
        'artist_id' => 5,
        'technique_id' => 5,
    ],
    [
        'artist_id' => 6,
        'technique_id' => 6,
    ],
    ]);
    DB::table('exhibitions_has_artworks')->insert([
    [
        'exhibition_id' => 4,
        'artwork_id' => 4,
    ],
    [
        'exhibition_id' => 5,
        'artwork_id' => 5,
    ],
    [
        'exhibition_id' => 6,
        'artwork_id' => 6,
    ],
    ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
