
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #111;
            height: 55px;


        }

        li {
            float: left;
            margin-top: 0px;
            font-size: 20px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            background-color: #111;
        }

        li a:hover {
            background-color: #122b40;
        }

        #logo a{
            margin-right: 50px;
            background-color: #761c19;
        }

        .login{
            float: right;
            font-size: 15px;
            text-decoration: underline;
            margin: 0;
        }

        .login a{
            margin-top: 15px;
            padding: 0px;
            margin-right: 20px;
        }

    </style>


<ul class="navbar">
    <li id="logo"><a  href="{{ action('EventSurferController@getHomePage') }}">Event Surfer</a></li>
    <li><a href="{{ action('EventSurferController@getHomePage') }}">Home</a></li>
    <li><a href="{{ action('EventSurferController@getContactPage') }}">Contact</a></li>
    <li><a href="{{ action('EventSurferController@getAboutPage') }}">About</a></li>
    <li class="login"><a>Log in</a></li>
    <li class="login"><a href="#register">Sign in</a></li>
</ul>

