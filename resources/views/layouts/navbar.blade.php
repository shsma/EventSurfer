
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            height: 100px;

        }

        li {
            float: left;
            margin-top: 20px;
            margin-left: 20px;
            font-size: 20px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: underline;
        }

        li a:hover {
            background-color: #111;
        }

    </style>


<ul class="navbar">
    <li><a class="active" href="{{ action('EventSurferController@getHomePage') }}">Home</a></li>
    <li><a href="{{ action('EventSurferController@getHomePage') }}">News</a></li>
    <li><a href="{{ action('EventSurferController@getContactPage') }}">Contact</a></li>
    <li><a href="{{ action('EventSurferController@getAboutPage') }}">About</a></li>
</ul>

