<?php

namespace Database\Factories;

use App\Models\WaitingGame;
use Illuminate\Database\Eloquent\Factories\Factory;

class WaitingGameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WaitingGame::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(User $user, $stakes, $turn_limit)
    {
        return [
            'user_id' => $user->id,
            'stakes' => $stakes,
            'turn_limit' => $turn_limit,
        ];
    }
}
