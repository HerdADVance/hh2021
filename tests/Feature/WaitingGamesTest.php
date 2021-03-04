<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class WaitingGamesTest extends TestCase
{
    //use DatabaseMigrations;

    //public function setUp()
    //{
        // call this if you're extending TestCase
        //parent::setUp();

        // do other stuff that will be used by all tests below
    //}

    // this will act as if logged in as the created user
    // $this->be($user = factory()->make()); 

    // put this at beginning of render function in App/Exceptions/Handler.php to get around Laravel not failing tests when no route endpoint
    // if(app()->environment() === 'testing') throw $exception

    public function test_waiting_game_can_be_created()
    {
        $user = User::factory()->make([]);

        $response = $this->actingAs($user)->post('/game', [
            'user_id' => $user->id,
            'stakes' => 30,
            'turn_limit' => 86400,
        ]);

        // Find a way to assert that game was created in database
    }
}
