@extends('layouts.app')
@section('content')
<div class="ui twelve wide column marged">
	<div class="ui three cards">
		@foreach($users as $user)
		@for ($i = 0; $i < count($user->meteos); $i++)
		<div class="card">
			<div class="content">
				<div class="header">
					<img src="{{$user->avatar}}" alt="" class="ui avatar image">
					{{$user->name}}
					@if ($user->meteos[$i]->meteo === 1)
						<i class="sun yellow icon"></i>
					@elseif($user->meteos[$i]->meteo === 2)
						<i class="cloud blue icon"></i>
					@elseif($user->meteos[$i]->meteo === 3)
						<i class="rain brown icon"></i>
					@elseif($user->meteos[$i]->meteo === 4)
						<i class="lighting red icon"></i>
					@elseif($user->meteos[$i]->meteo === 5)
						<i class="asterisk grey icon"></i>
					@endif
				</div>
			</div>
			<div class="content">
				{{$user->meteos[$i]->desc}}
			</div>

			<div class="content">
				<div class="meta">{{$user->meteos[$i]->created_at}}</div>
			</div>
		</div>
		@endfor
		@endforeach
	</div>
</div>
@endsection