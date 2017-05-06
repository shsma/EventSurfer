<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Surfer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .wrapper{
                position: absolute;
                left: 0;
                top:0;
                width: 100%;
                height: 100%;
            }

            .backgroundImage{
                height: 100%;
                width: 100%;
                background-image: url("../images/audience-868074_960_720.jpg");
                background-size:cover;
                background-repeat: no-repeat;
                background-position: center center;
            }
        </style>
    </head>
    <body>
    <div class="wrapper">
        <div class="backgroundImage">
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
                        Event Surfer
                    </div>

                    <div class="links">
                        <a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getAboutPage') }}"> About </a>
                        <a role="button" class="btn btn-primary btn-md pull-right" href="{{ action('EventSurferController@getContactPage') }}">Contact </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>