<?php
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\MuseumController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Country;
use App\Models\Style;
use App\Models\Technique;
use App\Models\Genre;
use App\Models\Material;
use App\Models\Artist;
use App\Models\Museum;
use App\Models\Artwork;
use App\Models\Exhibition;

$tables = [
    'countries' => ['Страны', Country::class],
    'styles' => ['Стили', Style::class],
    'techniques' => ['Техники', Technique::class],
    'genres' => ['Жанры', Genre::class],
    'materials' => ['Материалы', Material::class],
    'artists' => ['Художники', Artist::class],
    'museums' => ['Музеи', Museum::class],
    'artworks' => ['Произведения', Artwork::class],
    'exhibitions' => ['Выставки', Exhibition::class],
    'artists_has_techniques' => ['Техники художников', null],
    'exhibitions_has_artworks' => ['Произведения на выставках', null],
];

Route::get('/', function () use ($tables) {
    $data = [];

    foreach ($tables as $table => $info) {
        $data[] = [
            'name' => $table,
            'title' => $info[0],
            'count' => DB::table($table)->count(),
        ];
    }

    return view('home', compact('data'));
});

Route::get('/table/{table}', function ($table) use ($tables) {

    abort_unless(isset($tables[$table]), 404);

    $title = $tables[$table][0];
    $model = $tables[$table][1];

    if ($model !== null) {
        $records = $model::all()->map(function ($record) {
            $attributes = $record->getAttributes();

            unset($attributes['created_at'], $attributes['updated_at']);

            return $attributes;
        });
    } else {
        $records = DB::table($table)->get()->map(function ($record) {
            $attributes = (array) $record;

            unset($attributes['created_at'], $attributes['updated_at']);

            return $attributes;
        });
    }

    // Заменяем внешние ключи названиями
    $records = $records->map(function ($record) use ($table) {

        switch ($table) {

            case 'artists':
                $record['country'] = DB::table('countries')->where('id', $record['country_id'])->value('name');
                $record['style'] = DB::table('styles')->where('id', $record['style_id'])->value('name');
                unset($record['country_id'], $record['style_id']);
                break;

            case 'museums':
                $record['country'] = DB::table('countries')->where('id', $record['country_id'])->value('name');
                unset($record['country_id']);
                break;

            case 'artworks':
                $record['artist'] = DB::table('artists')->where('id', $record['artist_id'])->value('name');
                $record['genre'] = DB::table('genres')->where('id', $record['genre_id'])->value('name');
                $record['material'] = DB::table('materials')->where('id', $record['material_id'])->value('name');
                unset($record['artist_id'], $record['genre_id'], $record['material_id']);
                break;

            case 'exhibitions':
                $record['museum'] = DB::table('museums')->where('id', $record['museum_id'])->value('name');
                unset($record['museum_id']);
                break;

            case 'artists_has_techniques':
                $record['artist'] = DB::table('artists')->where('id', $record['artist_id'])->value('name');
                $record['technique'] = DB::table('techniques')->where('id', $record['technique_id'])->value('name');
                unset($record['artist_id'], $record['technique_id']);
                break;

            case 'exhibitions_has_artworks':
                $record['exhibition'] = DB::table('exhibitions')->where('id', $record['exhibition_id'])->value('name');
                $record['artwork'] = DB::table('artworks')->where('id', $record['artwork_id'])->value('name');
                unset($record['exhibition_id'], $record['artwork_id']);
                break;
        }

        return $record;
    });

    $columnNames = [
        'id' => 'ID',
        'name' => 'Название',
        'country' => 'Страна',
        'style' => 'Стиль',
        'artist' => 'Художник',
        'genre' => 'Жанр',
        'material' => 'Материал',
        'museum' => 'Музей',
        'technique' => 'Техника',
        'exhibition' => 'Выставка',
    ];

    return view('table', compact('title', 'records', 'table', 'columnNames'));
});
Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{id}', [ArtistController::class, 'show']);
Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks/{id}', [ArtworkController::class, 'show']);
Route::get('/museums', [MuseumController::class, 'index']);
Route::get('/museums/{id}', [MuseumController::class, 'show']);
Route::get('/exhibitions', [ExhibitionController::class, 'index']);
Route::get('/exhibitions/{id}', [ExhibitionController::class, 'show']);