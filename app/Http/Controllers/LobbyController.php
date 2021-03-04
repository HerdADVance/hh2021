<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WaitingGame;

class LobbyController extends Controller
{
    public function index()
    {
    	$games = WaitingGame::all();
    	return view('lobby', ['games' => $games]);
    }
}
