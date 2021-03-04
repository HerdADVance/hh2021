<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->belongsToMany(Player::class)
            ->withPivot('round_played');
    }

    public function boards()
    {
        return $this->belongsToMany(Board::class)
            ->withPivot('order');
    }

    public static function getCardImage($cardId)
    {
        $card = Card::findOrFail($cardId);
        return '/images/cards/' . $card->face . $card->suit . '.png';
    }
}
