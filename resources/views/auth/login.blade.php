@extends('layouts.app')

@section('content')
<div class="ui three wide column">
    {{ csrf_field() }}
    <a href="{{url('/auth/github')}}" class="ui right labeled icon button">Log with<i class="github icon"></i></a>
</div>

@endsection
