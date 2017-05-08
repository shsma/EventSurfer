<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../../jqwidgets-ver4.5.2/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/scripts/jquery.js"></script>
    <script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="../../../../jqwidgets-ver4.5.2/jqwidgets/jqxpasswordinput.js"></script>
    <script>
        $(document).ready(function(){
            smoothScroll();
            @yield('document.ready')
        });

        function smoothScroll(){
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 2000, function(){
                        window.location.hash = hash;
                    });
                }
            });
        }
        @yield('head')
    </script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #ffffff;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .banner{
            margin-top: 0;
            height: 600px;
            background: url("/EventSurfer/resources/views/images/backgroundImage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .navbar{
            margin-bottom: 0;
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

        .links > a {
            font-family: 'Raleway', sans-serif;
            color: #ffffff;
            padding: 0 25px;
            font-size: 25px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background-color: #111;
            margin-right: 20px;
        }

        .links > a:hover {
            background-color: #122b40;
        }
        
        h3{
            font-family: 'Raleway', sans-serif;
            color: #000;
        }
        @yield('style')
    </style>
    @include('layouts.navbar')
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
                        <a class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getAboutPage') }}">Aout </a>
                        <a class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getContactPage') }}">Contact </a>
                    </div>

                @elseif($_SERVER['REQUEST_URI']== "/EventSurfer/about")
                    <div class="subtitle">
                        About
                    </div>
                    <div class="links">
                        <a class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getHomePage') }}">Home </a>
                        <a class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getContactPage') }}">Contact </a>
                    </div>
                @else
                    <div class="subtitle">
                        Contact
                    </div>
                    <div class="links">
                        <a class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getHomePage') }}">Home </a>
                        <a class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getAboutPage') }}">About </a>
                    </div>
                @endif


            </div>
        </div>
    </div>

</head>
<body>
@yield('body')

</body>
</html>