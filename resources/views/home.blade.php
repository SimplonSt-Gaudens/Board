@extends('layouts.app')
@section('content')
<div class="row">
    <div class="ui two wide middle aligned column marged">
        <img class="ui small image" src="{{$user->avatar}}" alt="">
        <div class="ui header">{{$user->first_name}} {{$user->last_name}}</div>
        @if (Auth::user())
        {{-- expr --}}
        <a href="{{url('/users/edit')}}" class="ui labeled icon green button"><i class="edit icon"></i>Edit</a>
        @endif
    </div>
</div>
<div class="row">
    <div class="ui four wide column">
        <div class="ui segments">
            <div class="ui segment">
                <a href="{{$user->github_profile}}">Github</a>
                <i class="github blue icon"></i>
            </div>
            <div class="ui clearing segment">
                <a href="{{$user->email}}">Mail</a>
                <i class="mail blue icon"></i>
            </div>
            <div class="ui segment">
                <a href="{{$user->website}}">Website</a>
                <i class="world blue icon"></i>
            </div>
        </div>
    </div>
    <div class="ui eight wide column">
        
    </div>
</div>
@endsection