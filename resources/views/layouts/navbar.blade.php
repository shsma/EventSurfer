
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;

        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

    </style>


<ul>
    <li><a class="active" href="{{ action('EventSurferController@getHomePage') }}">Home</a></li>
    <li><a href="{{ action('EventSurferController@getHomePage') }}">News</a></li>
    <li><a href="{{ action('EventSurferController@getContactPage') }}">Contact</a></li>
    <li><a href="{{ action('EventSurferController@getAboutPage') }}">About</a></li>
</ul>

