<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style>
        html, body {
            background-color: #fff;
            color: #000000;
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
            height: 100vh;
            margin: 0;
        }

        .banner{
            font-weight: 200;
            margin-top: 0;
            height: 600px;
            color: #ffffff;
            background: url("/EventSurfer/resources/views/images/backgroundImage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .navbar{
            margin-bottom: 0;
            background-color: #122b40;
        }

        #app{
            color: black;
            font-weight: 500;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 120px;
            margin-bottom: 200px;
        }

        .subtitle {
            font-size: 60px;
            margin-bottom: 30px;
        }

        .links{
            margin-left: 30px;
            //background-color: yellow;
        }

        .links > a {
            font-family: 'Raleway', sans-serif;
            color: #ffffff;
            padding: 0 25px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            background-color: #111;
            margin-left: 20px;
        }

        .links > a:hover {
            background-color: #122b40;
        }

        h3{
            font-family: 'Raleway', sans-serif;
            color: #000;
        }
        @yield('css')
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Event Surfer
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div>
            <div class="content">
                <div class="title m-b-md">
                    Event Surfer
                </div>
                <div class="subtitle">
                    @yield('title')
                </div>

                @if($_SERVER['REQUEST_URI']== "/EventSurfer/")
                    <div class="subtitle">
                        Home
                    </div>
                    <div class="links">
                        <a class="" href="{{ action('EventSurferController@getAboutPage') }}">Aout </a>
                        <a class="" href="{{ action('EventSurferController@getContactPage') }}">Contact </a>
                    </div>
                @elseif($_SERVER['REQUEST_URI']== "/EventSurfer/about")
                    <div class="subtitle">
                        About
                    </div>
                    <div class="links">
                        <a class="" href="{{ action('EventSurferController@getHomePage') }}">Home </a>
                        <a class="" href="{{ action('EventSurferController@getContactPage') }}">Contact </a>
                    </div>
                @elseif($_SERVER['REQUEST_URI']== "/EventSurfer/contact")
                    <div class="subtitle">
                        Login
                    </div>
                    <div class="links">
                        <a class="" href="{{ action('EventSurferController@getHomePage') }}">Home </a>
                        <a class="" href="{{ action('EventSurferController@getAboutPage') }}">About </a>
                    </div>
                @else
                    <div class="subtitle">
                        Join the move!
                    </div>
                @endif


            </div>
        </div>
    </div>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('/public/js/app.js') }}"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.base.css" type="text/css" />
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxinput.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxpasswordinput.js"></script>
</body>
</html>
