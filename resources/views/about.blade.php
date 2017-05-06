@extends('layouts.layout')

@section('body')
<div class="banner">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                About
            </div>

            <div class="links">
                <a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getHomePage') }}">Home </a>
                <a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getContactPage') }}">Contact </a>
            </div>
        </div>
    </div>
</div>
@stop
