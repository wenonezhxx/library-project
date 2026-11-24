<?php

namespace App\Http\Controllers;
use App\Models\Exhibition;

class ExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::all();

        return view('exhibitions.index', compact('exhibitions'));
    }

    public function show($id)
    {
        $exhibition = Exhibition::with([
    'museum',
    'artworks'
])->findOrFail($id);

        return view('exhibitions.show', compact('exhibition'));
    }
}
