@extends('layouts.layout')

@section('body')
<div class="banner">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Event Surfer
            </div>
            <div class="subtitle">
                Contact
            </div>

            <div class="links">
                <a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getHomePage') }}">Home </a>
                <a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getAboutPage') }}"> About </a>
            </div>
        </div>
    </div>
</div>
@stop
