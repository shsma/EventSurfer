<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
            background-color: #761c19;
        }



    </style>
</head>
<body>
    @include('layouts.navbar')
    @yield('.banner')
    @yield('body')
</body>
</html>