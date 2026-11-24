<?php

namespace App\Http\Controllers;

use App\Models\Museum;

class MuseumController extends Controller
{
    public function index()
    {
        $museums = Museum::all();

        return view('museums.index', compact('museums'));
    }

    public function show($id)
    {
        $museum = Museum::with([
        'country',
        'exhibitions'
    ])->findOrFail($id);

        return view('museums.show', compact('museum'));
    }
}
