<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function players()
    {
    	return $this->hasMany(Player::class);
    }

    public function boards()
    {
    	return $this->hasMany(Board::class);
    }

    public static function createGame($stakes, $turn_limit)
    {
        $game = Game::create([
            'stakes' => $stakes,
            'turn_limit' => $turn_limit,
            'round' => 1,
        ]);

        return $game;
    }

    public static function startGame($game)
    {
        $newGame = Game::createGame($game->stakes, $game->turn_limit);

        // Cards (bring this in from either a cache or just data folder)
        $deck = Card::all()->shuffle();
        
        // Create all 5 Boards
        for($i = 1; $i < 6; $i++){
            
            $board = Board::createBoard($game->id, $i);
            
            for($j = 1; $j < 6; $j++){            
                
                $card = $deck->shift();

                $board->cards()->attach([
                    $card->id => ['order' => $j]
                ]);
            }
        }

        // Create 2 players
        $userIds = [$game->user_id, Auth::id()];
        for($i = 0; $i < 2; $i++){
            
            $player = Player::createPlayer($userIds[$i], $game->id);
            
            for($j = 0; $j < 10; $j++){            
                
                $card = $deck->shift();

                $player->cards()->attach($card->id);
            }

        }

        return $newGame;
    }
}
