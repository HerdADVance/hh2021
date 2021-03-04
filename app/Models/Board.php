<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    
    public function cards()
    {
        return $this->belongsToMany(Card::class)
            ->withPivot('order');
    }

    public static function createBoard($gameId, $round){
        $board = Board::create([
            'game_id' => $gameId,
            'round' => $round
        ]);

        //$board->attach([$card->id => ['order' => $i]]);

        return $board;
    }

}
