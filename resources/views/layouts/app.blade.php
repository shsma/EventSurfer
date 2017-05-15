<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Event surfer</title>

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
            color: #FFFFFF !important;
        }

        #app{
            color: black;
            font-weight: 700;
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
            margin-bottom: 100px;
        }

        .subtitle {
            font-size: 60px;
            margin-bottom: 30px;
        }

        .links{
            margin-left: 1%;
            //background-color: yellow;
            height: 50px;
        }

        .links > a {
            font-family: 'Raleway', sans-serif;
            color: #ffffff;
            height: 40px;
            padding: 0 25px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            background-color: #122b40;
            margin-left: 20px;
        }

        .links > a:hover {
            background-color: #4e97ed;
        }

        h3{
            font-family: 'Raleway', sans-serif;
            color: #000;
        }

        #slideDown{
            padding: 35px 50px;
            margin-left: 48%;
            height: inherit;
            width: inherit;
            background: url("/EventSurfer/resources/views/images/arrowDown.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;

        }

        #subBanner{
            margin-bottom: 70px;
        }
        @yield('css')
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar">
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
        <div id="subBanner">
            <div class="content">
                <div class="title m-b-md">
                    Event Surfer
                </div>
                <div class="subtitle">
                    @yield('title')
                </div>

                @if($_SERVER['REQUEST_URI']== "/EventSurfer/")
                    <div class="subtitle">
                        Dashboard
                    </div>
                    <div class="links">
                        <a class="" href="{{ action('EventSurferController@getSearchPage') }}">Search event </a>
                        <a class="" href="{{ action('EventSurferController@getContactPage') }}">Contact crew </a>
                    </div>
                @elseif($_SERVER['REQUEST_URI']== "/EventSurfer/search")
                    <div class="subtitle">
                        Search Event
                    </div>
                    <div class="links">
                        <a class="" href="{{ action('EventSurferController@getDashboardPage') }}">Dashboard </a>
                        <a class="" href="{{ action('EventSurferController@getContactPage') }}">Contact crew </a>
                    </div>
                @elseif($_SERVER['REQUEST_URI']== "/EventSurfer/contact")
                    <div class="subtitle">
                        Contact
                    </div>
                    <div class="links">
                        <a class="" href="{{ action('EventSurferController@getDashboardPage') }}">Dashboard </a>
                        <a class="" href="{{ action('EventSurferController@getSearchPage') }}">Search event </a>
                    </div>
                @else
                    <div class="subtitle">
                        Join the move!
                    </div>
                @endif

            </div>
        </div>
        <a id="slideDown" href="#ancre" onclick="smoothScroll('#slideDown')"></a>
    </div>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('/public/js/app.js') }}"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.base.css" type="text/css" />
<link rel="stylesheet" href="../../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
<link rel="stylesheet" href="../../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.darkblue.css" type="text/css" />
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxbuttons.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxinput.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxpasswordinput.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxdatetimeinput.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxcalendar.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/globalization/globalize.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxscrollbar.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxtextarea.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxlistbox.js"></script>
<script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxdropdownlist.js"></script>
<script>
    function smoothScroll(id){
        $(id).on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                //alert(hash);
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 1000, function(){
                    window.location.hash = hash;
                });
            }
        });
    }
</script>
</body>
</html>
