<?php

namespace App\Listeners;

use App\Events\GameStarted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendUserToGame
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  GameStarted  $event
     * @return void
     */
    public function handle(GameStarted $event)
    {
        //
    }
}
