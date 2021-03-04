<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        
    </head>
    <body>
        @if(Session::has('status'))
            <p class="status success">{{ Session::get('status') }}</p>
        @endif
        <section class="wrap">
            <h1>Huntington Hold'em</h1>

            <div class="col-6">
                <h2>Create a Game</h2>
                <form method="POST" action="/game">
                    @csrf
                    
                    <label for="stakes">Stakes</label>
                    <select name="stakes">
                        <option value="1">1</option>
                        <option value="3">3</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>

                    <label for="turn_limit">Turn Limit</label>
                    <select name="turn_limit">
                        <option value="86400">24 hours</option>
                        <option value="43200">12 hours</option>
                        <option value="3600">1 hour</option>
                        <option value="60">1 minute</option>
                        <option value="15">15 seconds</option>
                    </select>

                    <button type="submit">Create New Game</button>
                </form>

                <h2>Live Games</h2>
                <table>
                    <tr>
                        <th>Opponent</th>
                        <th>Round</th>
                        <th>Stakes</th>
                        <th>Turn Limit</th>
                        <th></th>
                    </tr>
                    @foreach($players as $player)
                        <tr>
                            <td>{{ $player->getOpponentName($player->id, $player->game->id, Auth::user()->id) }}</td>
                            <td>{{ $player->game->round }}</td>
                            <td>{{ $player->game->stakes }}</td>
                            <td>{{ $player->game->turn_limit }}</td>
                            <td>
                                <a href="/game/{{ $player->game->id }}">Go To Game</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>

            <div class="col-6">
                <h2>Pending Games</h2>
                <p>You have {{ count($waitingGames) }} pending games.
                <table>
                    <tr>
                        <th>Stakes</th>
                        <th>Turn Limit</th>
                    </tr>
                    @foreach($waitingGames as $game)
                        <tr>
                            <td>{{ $game->stakes }}</td>
                            <td>{{ $game->turn_limit }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>


            

        </section>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
