<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class)
            ->withPivot('round_played');
    }

    public static function createPlayer($userId, $gameId)
    {
        $player = Player::create([
            'user_id' => $userId,
            'game_id' => $gameId,
        ]);

        return $player;
    }

    public static function getOpponentName($playerId, $gameId, $userId)
    {
        $player = Player::where([
            ['game_id', $gameId],
            ['user_id', '!=', $userId]
        ])->get()->first();

        return $player->user->username;
    }
}
