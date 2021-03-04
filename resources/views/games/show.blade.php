<style>
	div{margin-bottom: 50px; border: 1px solid black; padding: 10px; clear: both; overflow: auto;}
	img{width: 80px; float: left;}
	span{float: left; margin-right: 20px; background: #333; color: white; padding: 20px; font-size: 18px;}
	.board{width: 400px;}
	.user-card{cursor: pointer;}

</style>

<h1>Game #{{ $game->id }}</h1>

@foreach($game->players as $player)
	<div class="player">
		<span>{{ $player-> score }}</span>
		{{ $player->user->username }}
		<div class="player-cards">
			@foreach($player->cards as $card)
				@can('view', $player)
					<img class="card user-card" src= "{{ App\Models\Card::getCardImage($card->id) }}">
				@else
					<img class="card" src= "/images/cards/back.png">
				@endcan
			@endforeach
		</div>
	</div>
@endforeach

<div class="board">
	@foreach($board->cards as $card)
		<img src= "{{ App\Models\Card::getCardImage($card->id) }}">
	@endforeach
</div>
