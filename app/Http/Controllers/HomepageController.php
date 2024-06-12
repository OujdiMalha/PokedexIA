<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class HomepageController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();

        return view('homepage.index', [
            'pokemons' => $pokemons,
        ]);
    }
}
