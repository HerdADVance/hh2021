
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
        <section class="wrap">
            
            <h1>Lobby</h1>

			<table>
				<tr>
					<th>Opponent</th>
					<th>Stakes</th>
					<th>Turn Limit</th>
				</tr>
				@foreach($games as $game)
					<tr>
						<td>{{ $game->user->username }}</td>
						<td>{{ $game->stakes }}</td>
						<td>{{ $game->turn_limit }}</td>
						<td>
							@can('join', $game)
								<form action="/game/{{ $game->id }}" method="POST">
									@csrf
									<button>Join Game</button>
								</form>
							@endcan
						</td>
					</tr>
				@endforeach
			</table>
            
        </section>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>



