@extends('layouts.app')
@section('content')
<div class="ui twelve wide column">
	<table class="ui celled padded table">
		<thead>
			<tr>
				<th class="single line"></th>
				<th>Nom/Prénom</th>
				<th><i class="birthday icon"></i></th>
				<th>Promo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>
						<a href="/users/show/{{$user->id}}">
							<img class="ui avatar small image" src="{{$user->avatar}}" alt="">
						</a>
					</td>
					<td>{{$user->name}}</td>
					<td></td>
					<td>2</td>
					<td><a href="/users/show/{{$user->id}}" class="ui icon button"><i class="user icon"></i></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection