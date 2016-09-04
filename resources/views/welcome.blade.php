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
                color: #8c8c8c;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
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
                transition: background 3s;
                -webkit-transition: all 3s;
            }
            .flex-center:hover, .flex-center:focus{
                background-color: #f2e5ff;
                transition: background 3s;
                -webkit-transition: all 3s;
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
                border-radius:2rem;
                transition: all 3s;
                -webkit-transition: all 3s;
            }
            .content:hover, .content:focus {
                background-color:#ffffff;
                border-radius:5rem;
                transition: all 3s;
                -webkit-transition: all 3s;
            }
            .title {
                font-size: 3em;
                font-weight:200;
                color:#c493a6;
                padding: 1rem;
            }

            .links > a {
                color: #8c8c8c;
                padding: 0 25px;
                text-decoration: none;
                font-size: 1.1rem;
                letter-spacing: .124em;
                margin: 2.0rem 1.1rem 0 0 ;
                padding: 1rem;
                text-transform: uppercase;
            }

            .m-b-md {
                margin: 2rem 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                    {{--<a href="{{ url('/login') }}">Login</a>--}}
            </div>
            <div class="content">
                <div class="title m-b-md">
                    <img src="/images/copacetic.co-face.png" title="Copacetic - Blissful Software Delivery Consulting" alt="Copacetic - Blissful Software Delivery Consulting">
                    <p>copacetic.co</p>
                </div>

                <div class="links">
                    <p>
                        Blissful Software Help
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
