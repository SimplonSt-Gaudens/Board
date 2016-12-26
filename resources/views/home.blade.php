@extends('layouts.app')
@section('content')
<div class="ui two wide column">
    <img class="ui small image" src="{{$user->avatar}}" alt="">
    <div class="ui header">{{$user->first_name}} {{$user->last_name}}</div>
</div>
<div class="row">
    <div class="ui twelve wide column">
                    @if(Auth::user()->roles->contains('slug', 'form'))
        <div class="ui vertical segments">
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
        </div>
    </div>
        @endif
        <div class="ui segment">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae, voluptatum. Eaque sed quia non deleniti labore incidunt doloremque, est iste enim quaerat culpa optio cupiditate perspiciatis possimus nemo placeat!
        </div>
        <div class="ui segment">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae, voluptatum. Eaque sed quia non deleniti labore incidunt doloremque, est iste enim quaerat culpa optio cupiditate perspiciatis possimus nemo placeat!
        </div>
</div>
@endsection