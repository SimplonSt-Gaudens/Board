@extends('layouts.app')
@section('content')
<div class="ui six wide column">
    <img class="ui small image" src="{{Auth::user()->avatar}}" alt="">
</div>
<div class="row">
    <div class="ui six wide column">
        <div class="ui segments">
            <div class="ui segment">Météo</div>
            <div class="ui segment">
                <form action="/meteo/post/{{User::where('id')}}" method="post" class="ui form">
                    {{csrf_field()}}
                    <div class="field">
                        <textarea name="description" id="meteo" ></textarea>
                    </div>
                    <div class="field">
                        <div class="ui selection dropdown">
                            <input type="hidden" name="meteo">
                            <i class="dropdown icon"></i>
                            <div class="default text">Awesome</div>
                            <div class="menu">
                                <div class="item" data-value="1"><i class="icon sun"></i>Awesome</div>
                                <div class="item" data-value="2"><i class="icon cloud"></i>Fine</div>
                                <div class="item" data-value="3"><i class="icon rain"></i>Could be worse</div>
                                <div class="item" data-value="4"><i class="icon lightning"></i>Disaster</div>
                                <div class="item" data-value="5"><i class="icon asterisk"></i>Misc</div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="ui fluid labeled icon primary button"><i class="send icon"></i>Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection