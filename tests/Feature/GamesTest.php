<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class GamesTest extends TestCase
{
    //use DatabaseMigrations;

    public function test_example()
    {
        $response = $this->get('/');

        //$response->assertSee('abc');
    }
}
