<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WaitingGame;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class WaitingGamePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function store(User $user, $request)
    {
        $userWaitingGames = WaitingGame::where([
            'user_id' => $user->id,
            'turn_limit' => $request->turn_limit,
            'stakes' => $request->stakes
        ])->get()->count();

        return $userWaitingGames === 0
            ? Response::allow()
            : Response::deny('You have already created a game with these options.');
    }


    public function join(User $user, WaitingGame $game)
    {
        return $user->id != $game->user_id;
    }
}
