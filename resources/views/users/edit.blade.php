@extends('layouts.app')
@section('content')
<div class="ui five wide column marged">
	<h3 class="ui dividing header">Edit Profil</h3>
	<form class="ui form" action="/user/post/edit/{{$user->id}}" method="post">
		{{csrf_field()}}
		<div class="ui fields">
			<div class="field">
				<label for="">Nom</label>
				<input type="text" name="last_name" value="{{$user->last_name}}">
			</div>
			<div class="field">
				<label for="">Prénom</label>
				<input type="text" name="first_name" value="{{$user->first_name}}">
			</div>
		</div>
		<div class="ui field">
			<label for="">Email</label>
			<input type="email" name="email" value="{{$user->email}}">
		</div>
		<div class="ui field">
			<button class="ui fluid green icon labeled button" type="submit"><i class="send icon"></i>Send</button>
		</div>
	</form>
</div>
@endsection