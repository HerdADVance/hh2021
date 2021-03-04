<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;
use App\Models\Game;
use App\Models\Player;
use App\Models\WaitingGame;

use App\Events\WaitingGameStarted;

use Illuminate\Support\Facades\Auth;

class WaitingGamesController extends Controller
{
    public function store(Request $request)
    {
        // Make sure user is allowed to create a game
        $this->authorize('store', [WaitingGame::class, $request]);
        
        // Create the game
        WaitingGame::create([
    		'user_id' => auth()->id(),
    		'turn_limit' => request('turn_limit'),
    		'stakes' => request('stakes')
    	]);

        // Return with success message
        $request->session()->flash('status', 'A new game was created and will start when a challenger joins.');
    	return redirect()->route('home');
    }

    public function join($id)
    {
    	// Find game and authorize
    	$game = WaitingGame::findOrFail($id);
    	$this->authorize('join', $game); // can move this to routes if wanted

    	// Start Game
    	$newGame = Game::startGame($game);

        // Delete Waiting Game
        

    	// Send creator to game
    	//broadcast(new GameUpdated(['gid' => $this->gid ])); //something like this
        WaitingGameStarted::dispatch($game);

    	// Send joiner to game
    	return redirect()->route('game.show', $newGame->id);



    }
}
