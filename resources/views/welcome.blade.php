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
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
                background: rgb(242,229,255);
                height:100vh;
            }

            .flex-center {
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(rgb(255,250,240),rgb(242,229,255));
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
                top:20px;
                width:100%;
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

            .footer { font-size: 0.67rem; padding: .5rem 0; }

            .footer-links {
                padding: .5em;
            }

            .footer-links > a {
                color: #636b6f;
                padding: 0 1em;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                line-height:1.8rem;
            }

            .img-wrap { display: inline-block; }

            .promo-img {
                display:inline-block;
                margin: 0 auto;
            }

            .form-group { padding-top:.4em; }



            .input {
                width: 304px;
                border-radius: 0.5em;
                line-height: 1.5rem;
            }

            .success, .errors {
                margin:0 auto;
                width: 304px;
                padding:.2rem 0;
                border-radius:0.5rem;
            }

            .errors{ background: #f9f9c0; border: 1px solid #ffff00; }

            .message-list-item { text-align: left; list-style-type: none; }

            .success {background: #acf99f; border: 1px solid #2e5d2e; }

            .btn-big { width: 304px;}

            /* Vendor Styles */

            .g-recaptcha {display: inline-block;}

            .square {
                float:left;
                position: relative;
                width: 30%;
                padding-bottom : 30%; /* = width for a 1:1 aspect ratio */
                margin:1.66%;
                background-color:transparent;
                border-radius: 1em;
                overflow:hidden;
                color: #636b6f;
            }

            .square-content {
                position:absolute;
                height:90%; /* = 100% - 2*5% padding */
                width:90%; /* = 100% - 2*5% padding */
                padding: 5%;

            }
            .table{
                display:table;
                width:100%;
                height:100%;
            }
            .table-cell{
                display:table-cell;
                vertical-align:middle;
            }
            /*  For list */
            ul{
                text-align:left;
                margin:5% 0 0;
                padding:0;
                list-style-position:inside;
            }
            li{
                margin: 0 0 0 5%;
                padding:0;
            }

            /*  For responsive images as background */

            .bg {
                background-position:center center;
                background-repeat:no-repeat;
                background-size:cover; /* you change this to "contain" if you don't want the images to be cropped */

            }
            .square-links > a, .square-links p  {
                color: #ffffff;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
            }

            .img1 {
                background-image: url('images/make.jpg');
            }
            .img2 {
                background-image: url('images/deliver.jpeg');
            }
            .img3 {
                background-image: url('images/help.jpg');

            }
            .img4 {
                background-image: url('images/learn.jpg');
            }
            .img5 {
                background-image: url('images/change.jpg');
            }

            /*  following just for the demo */


            .offerings {
                color: #fff;
                text-align:center;
            }
            p{
                margin:0;
                padding:0;
            }
        </style>
        <script src="https://unpkg.com/vue"></script>
    </head>
    <body>
        <div class="flex-center position-ref">

            <div class="content">
                <div class="img-wrap">
                    <img src="/images/copacetic.co-logo-web.png"
                         class="promo-img"
                         title="Feel Good Software Delivery Consulting, Copacetic"
                         alt="Feel Good Software Delivery Consulting, Copacetic."
                    />
                </div>
                <div class="offerings">
                <!-- 1st row verticaly centered text in the square columns -->

                <div class="square bg img1">
                    <a href="#development">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                <p>Make</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell">
                                The cake is no good until you can eat it.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg img2">
                    <a href="#operations">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                               <p>Deliver</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <!-- 2nd row verticaly centered images in square columns -->

                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell">
                                Software that feels good.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg img3">
                    <a href="#operations">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                <p>Help</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                Quality <em>and</em> velocity.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3rd row responsive images in background with centered content -->

                <div class="square bg img4">
                    <a href="#analysis">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                               <p>Learn</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                Do it again.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg img5">
                    <a href="#maintenance">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                <p>Change</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                </div>
                <hr>
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
                    <div class="converse">I can help. Talk to me.</div>
                @endif
                <div class="email-capture">
                    <form method="POST" action="{{ route('contact-form') }}">
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
                                    class="btn btn-primary btn-big"
                            >
                               HOWDY!
                            </button>
                        </div>

                    </form>
                </div>
                <hr>
                <div class="footer">
                    <div class="links">
                        @if (Route::has('login'))
                            <div class="footer-links">
                                @auth
                                <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>

                                    @endauth
                            </div>
                        @endif

                    </div>
                    <p>&copy; Copacetic Media </p>
                    <p>{{ \Carbon\Carbon::now('America/Denver') }}</p>
                </div>
            </div>
        </div>
    </body>
</html>
