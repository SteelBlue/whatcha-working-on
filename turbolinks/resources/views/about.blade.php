@extends('layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="css/about.css">
@stop

@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                About
            </div>

            <div class="links">
                <a href="/">Home</a>
                <a href="/" data-turbolinks="false">Home (no turbolinks)</a>
                <a href="/redirect">Redirect</a>
            </div>
        </div>
    </div>

@stop