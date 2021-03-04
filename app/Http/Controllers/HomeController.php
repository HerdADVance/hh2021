<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Player;
use App\Models\WaitingGame;

class HomeController extends Controller
{
    public function index()
    {
    	$players = Player::where('user_id', auth()->id())->get();
    	$waitingGames = WaitingGame::where('user_id', auth()->id())->get()->sortByDesc('stakes');

    	return view('home', [
    		'players' => $players,
    		'waitingGames' => $waitingGames,
    	]);
    }
}
