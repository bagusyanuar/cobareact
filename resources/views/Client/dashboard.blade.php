@extends('welcome')

@section('content')
    Dashboard <br>
    @if (auth()->check())
        {{auth()->user()->username}}
    @endif
    <a href="/logout">Logout</a>
@endsection