
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
            background-color: #74787E;
        }

        #logo a{
            background-color: #761c19;
            margin-right: 50px;
        }

    </style>


<ul class="navbar">
    <li id="logo"><a>Event Surfer</a></li>
    <li><a href="{{ action('EventSurferController@getHomePage') }}">Home</a></li>
    <li><a href="{{ action('EventSurferController@getContactPage') }}">Contact</a></li>
    <li><a href="{{ action('EventSurferController@getAboutPage') }}">About</a></li>
</ul>

