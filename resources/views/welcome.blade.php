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
                background: linear-gradient(rgb(255,250,240),rgb(255,250,240));
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
                font-size: 1.2rem;
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

            .top-wrapper { margin: 1em auto; }

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

            .errors{ background: #f9f9c0; border: 1px solid #ffff00; font-size:1.0rem; }

            .message-list-item { text-align: left; list-style-type: none;}

            .success {background: #acf99f; border: 1px solid #2e5d2e; }

            .btn-big { width: 152px;}

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
                color: #434b4f;
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

            /*  For responsive images */
            .square-content .rs {
                width:auto;
                height:auto;
                max-height:90%;
                max-width:100%;
            }

            .square-links > a, .square-links p  {
                color: #ffffff;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 1.4rem;
            }
            .make {
                background-image: url('images/make.jpg');
            }
            .deliver {
                background-image: url('images/deliver.jpg');
            }
            .help {
                background-image: url('images/help.jpg');

            }
            .learn {
                background-image: url('images/learn.jpg');
            }
            .change {
                background-image: url('images/change.jpg');
            }

            .offerings {
                color: #fff;
                text-align:center;
            }
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">

            <div class="content">
                <div class="top-wrapper">
                    @if ($errors->count() >= 1)
                        <div class="errors">
                            <ul>
                                <li class="message-list-item">Scroll down&hellip;something is borked.</li>
                            </ul>
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
                        <img src="images/copacetic.co-face-120.png" />
                    @endif
                </div>
                <div class="offerings">
                <!-- 1st row of service offerings grid -->
                <div class="square bg make">
                    <a href="#development" id="make">
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
                                There is no cake.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg deliver" id="deliver">
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

                <!-- 2nd row row of service offerings grid  -->

                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell">
                                Software that feels good.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg help" id="help">
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

                <!-- 3rd row row row your boat of service offerings grid  -->

                <div class="square bg learn" id="learn">
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
                <div class="square bg change" id="change">
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
                @else
                    <div>I can help. Talk to me.</div>
                @endif
                <div class="email-capture">
                    <form method="POST" action="{{ route('contact-form') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input name="email"
                                   class="input email address"
                                   type="text"
                                   placeholder="your email"
                                   value="{{ old('email') }}"
                            >
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="input email message" rows="8" placeholder="message">
                                {{ old('message') }}
                            </textarea>
                        </div>
                        <div class="form-group recaptcha">
                            {!! Recaptcha::render() !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-big">
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
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </body>
</html>
