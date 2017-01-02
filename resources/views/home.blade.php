@extends('layouts.app')
@section('content')
<div class="ui two wide middle aligned column marged">
    <img class="ui small image" src="{{$user->avatar}}" alt="">
    <div class="ui header">{{$user->first_name}} {{$user->last_name}}</div>
    @if (Auth::user())
        {{-- expr --}}
    <a href="{{url('/users/edit')}}" class="ui labeled icon green button"><i class="edit icon"></i>Edit</a>
    @endif
</div>
<div class="row">
    <div class="ui four wide column">
        <div class="ui segments">
            <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae, voluptatum. Eaque sed quia non deleniti labore incidunt doloremque, est iste enim quaerat culpa optio cupiditate perspiciatis possimus nemo placeat!
            </div>
        </div>
    </div>
    <div class="ui four wide column">
        <div class="ui segment">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae, voluptatum. Eaque sed quia non deleniti labore incidunt doloremque, est iste enim quaerat culpa optio cupiditate perspiciatis possimus nemo placeat!
        </div>
    </div>
</div>
@endsection