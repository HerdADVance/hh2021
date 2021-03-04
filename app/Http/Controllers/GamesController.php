<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GamesController extends Controller
{
    public function create(Request $request)
    { 
    	dd($request);
    	$game = new WaitingGame();
    	$game->save();

    	return redirect()->route('home');
    }

    public function show($id)
    {
    	$game =  Game::findOrFail($id);
        $board = $game->boards->where('round', $game->round)->first();

    	return view('games.show', compact('game', 'board'));
    }
}
