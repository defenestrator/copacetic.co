<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
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
                background: linear-gradient(rgb(255,250,240),rgb(242,229,255)),
                            linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6));
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
            .btn {
                display: inline-block;
                padding: 6px 12px;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
            }
            .btn-primary {
                background-color: #cd9aae;
                border-color: #87616b;
                color:white;
            }

            .links > a {
                color: #636b6f;
                padding: 0 1em;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                line-height:1.8rem;
            }

            .promo-img {
                opacity: .5;
            }

            .form-group { padding-top:.4em; }
            .footer { font-size: 0.67rem; padding-top: .5rem; }
            .input { width: 304px; border-radius: 0.5em; line-height: 1.5rem;}
            .converse, .success, .errors {  padding:.2rem .2rem; border-radius:0.5rem;  }
            .errors{ background: #f9f9c0; border: 1px solid #ffff00; }
            .message-list-item { font-size: 1.4rem; list-style-type: none; }
            .success {background: #acf99f; border: 1px solid #2e5d2e; }
            .message { }
            .g-recaptcha {display: inline-block;}
        </style>
        <script src="https://unpkg.com/vue"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
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
                <img src="/images/copacetic.co-logo-web.png"
                     class="promo-img"
                     title="Copacetic - Blissful Software Delivery Consulting"
                     alt="Copacetic - Blissful Software Delivery Consulting"
                />
                <div class="links">
                    <a href="#development">Make</a>
                    <a href="#operations">Deliver</a>
                    <a href="#analysis">Learn</a>
                    <a href="#maintenance">Change</a>
                    <a href="#recovery">Help</a>
                </div>

                @if ($errors->count() >= 1)
                    <div class="errors">
                        @foreach($errors->all() as $error)
                            <ul>
                                <li class="message-list-item">{{ $error }}</li>
                            </ul>
                        @endforeach
                    </div>
                @elseif (session('success'))
                    <div class="success">
                        <ul>
                            <li class="message-list-item">
                                {{ session('success') }}
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="converse">Start a conversation.</div>
                @endif
                <div class="email-capture">
                    <form method="POST" action="{{ route('landing-page-email') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input name="email"
                                   class="input email address"
                                   type="text"
                                   placeholder="your email"
                                   value="{{ old('address') }}"
                            >
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="input email message" rows="8" placeholder="message">{{ old('message') }}</textarea>
                        </div>
                        <div class="form-group recaptcha">
                            {!! Recaptcha::render() !!}
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                    class="btn btn-primary"
                            >
                               HOWDY
                            </button>
                        </div>

                    </form>
                </div>
                <hr>

                <div class="footer">
                    <p>&copy; Copacetic Media </p>
                    <p>{{ \Carbon\Carbon::now('America/Denver') }}</p>
                </div>
            </div>
        </div>
    </body>
</html>
