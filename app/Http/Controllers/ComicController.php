<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    public function index()
    {
        $comics = Comic::all();
        // var_dump($comics);
        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        $comics = Comic::findOrFail($comic);
        return view('comics.show', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store()
    {
        return 'Rotta store';
    }
}
