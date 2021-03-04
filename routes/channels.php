<?php

use Illuminate\Support\Facades\Broadcast;

use App\Models\WaitingGame;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.1', function ($user, $id) {
    return (int) $user->id === (int) $id;
    //return false;
});

// Broadcast::channel('waitingGames.{waitingGameId}', function ($user, $waitingGameId) {
//     return (int) $user->id === WaitingGame::findOrFail($waitingGameId)->user_id;
// });
// Broadcast::channel('waitingGames', function ($user, $id) {
//     return true;
// });