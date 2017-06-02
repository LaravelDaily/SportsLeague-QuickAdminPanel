<?php

namespace App\Http\Controllers;

use App\Game;

class GamesController extends Controller
{

    public function index()
    {
        $games = Game::whereNull('result1')->get();
        $results = Game::whereNotNull('result1')->get();

        return view('front.games', compact('games', 'results'));
    }

}
