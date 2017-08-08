<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feel Good Software Delivery</title>

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
                background: linear-gradient(rgb(255,250,240),rgb(242,229,255)),linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6));
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

            .promo-img {
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Copacetic
                </div>

                <div class="links">

                    <a href="development">Make</a>
                    <a href="operations">Deliver</a>
                    <a href="analysis">Learn</a>
                    <a href="maintenance">Change</a>
                    <a href="recovery">Help</a>
                </div>
                <img src="/images/copacetic.co-face.png"
                     class="promo-img"
                     title="Copacetic - Blissful Software Delivery Consulting"
                     alt="Copacetic - Blissful Software Delivery Consulting"
                />
                <p class="email-capture">
                    <div>Enter your email to start a conversation.</div>
                    <input class="input" type="text" placeholder="We can help.">
                    <button class="btn btn-primary">
                        Howdy!
                    </button>

                </p>
                <div class="links">
                    <a href="culture">Why?</a>
                </div>
            </div>
        </div>
    </body>
</html>
