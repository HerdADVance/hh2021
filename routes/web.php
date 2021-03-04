<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LobbyController;
use App\Http\Controllers\WaitingGamesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('home');

// Members Only
Route::middleware(['web'])->group(function () {
	
	// Lobby
	Route::get('/lobby', [LobbyController::class, 'index'])->name('lobby');

	// Games
	Route::get('/game/{id}', [GamesController::class, 'show'])->name('game.show');

	// Waiting Games
	Route::post('/game', [WaitingGamesController::class, 'store'])->name('waitingGame.create');
	Route::post('/game/{id}', [WaitingGamesController::class, 'join'])->name('joinGame');

});

require __DIR__.'/auth.php';