@extends('layouts.app')
@section('content')

<div class="ui two wide middle aligned column marged">
    <img class="ui small image" src="{{$user->avatar}}" alt="">
    <div class="ui header">{{$user->first_name}} {{$user->last_name}}</div>
        @if (Auth::user()->id === $user->id)
        {{-- expr --}}
    <a href="{{url('/users/edit')}}" class="ui labeled icon green button"><i class="edit icon"></i>Edit</a>
    @endif
</div>
<div class="row">
    <div class="ui four wide column">
        <div class="ui segments">
            <div class="ui segment">
                <a href="">Github</a>
                <i class="github blue icon"></i>
            </div>
            <div class="ui clearing segment">
                <a href="">Mail</a>
                <i class="mail blue icon"></i>
            </div>
            <div class="ui segment">
                <a href="">Website</a>
                <i class="world blue icon"></i>
            </div>
        </div>
    </div>
    <div class="ui six wide column">
        
    </div>
    @if(Auth::user()->roles->contains('slug', 'form'))
    <div class="ui six wide column">
        <div class="ui segments">
            <div class="ui segment">Météo</div>
            <div class="ui segment">
                <form action="/meteo/post/{{$user->id}}" method="post" class="ui form">
                    {{csrf_field()}}
                    <div class="field">
                        <textarea name="description" id="meteo" ></textarea>
                    </div>
                    <div class="field">
                        <div class="ui selection dropdown">
                            <input type="hidden" name="meteo">
                            <i class="dropdown icon"></i>
                            <div class="default text"><i class="icon yellow sun"></i>Awesome</div>
                            <div class="menu">
                                <div class="item" data-value="1"><i class="icon yellow sun"></i>Awesome</div>
                                <div class="item" data-value="2"><i class="icon blue cloud"></i>Fine</div>
                                <div class="item" data-value="3"><i class="icon brown rain"></i>Could be worse</div>
                                <div class="item" data-value="4"><i class="icon red lightning"></i>Disaster</div>
                                <div class="item" data-value="5"><i class="icon grey asterisk"></i>Misc</div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="ui fluid labeled icon primary button"><i class="send icon"></i>Send</button>
                </form>
            </div>
            @if (count($user->meteos) > 0)
                {{-- expr --}}
            <div class="ui segment">
                <div class="content">
                    <h4 class="ui header">
                        @if ($user->meteos->last()->meteo === 1)
                            <i class="sun yellow icon"></i>
                        @elseif($user->meteos->last()->meteo === 2)
                            <i class="cloud blue icon"></i>
                        @elseif($user->meteos->last()->meteo === 3)
                            <i class="rain brown icon"></i>
                        @elseif($user->meteos->last()->meteo === 4)
                            <i class="lighting red icon"></i>
                        @elseif($user->meteos->last()->meteo === 5)
                            <i class="asterisk grey icon"></i>
                        @endif
                        {{$user->meteos->last()->desc}}
                    </h4>
                    <span class="meta">{{$user->meteos->last()->created_at}}</span>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endif
</div>
@endsection