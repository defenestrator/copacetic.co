<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Copacetic, friend.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color:#fffaf0;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
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
                background-color:#fffaf0;
                transition: background 2s;
            }
            .flex-center:hover, .flex-center:focus{
                background-color: #d6ddff;
                transition: background 2s;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 25px;
            }

            .content {
                text-align: center;
                background-color:#fffaf0;
                border-radius:2em;
                transition: all 2s;
            }
            .content:hover, .content:focus {
                background-color:#ffffff;
                border-radius:8em;
                transition: all 2s;
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #8c8c8c;
                padding: 0 25px;
                text-decoration: none;
                font-size: 1.1em;
                letter-spacing: .124em;
                margin: 2.0em 1.1em 0 0 ;
                padding: 0;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
            <a href="http://blog.copacetic.co">Blog</a>
            @if (Route::has('login'))
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
            @endif
            </div>
            <div class="content">
                <div class="title m-b-md">
                    <img src="/images/copacetic.co-logo-web.png" title="Copacetic - Blissful Software Delivery Consulting" alt="Copacetic - Blissful Software Delivery Consulting">
                </div>

                <div class="links">
                    <a href="https://github.com/defenestrator/copacetic.co">Source</a>

                </div>
            </div>
        </div>
    </body>
</html>
