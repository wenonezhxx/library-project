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

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/{id}', [ArtistController::class, 'show']);
Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks/{id}', [ArtworkController::class, 'show']);
Route::get('/museums', [MuseumController::class, 'index']);
Route::get('/museums/{id}', [MuseumController::class, 'show']);
Route::get('/exhibitions', [ExhibitionController::class, 'index']);
Route::get('/exhibitions/{id}', [ExhibitionController::class, 'show']);