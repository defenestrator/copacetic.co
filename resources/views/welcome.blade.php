<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feel Good Software Delivery</title>

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
                background: #99ccfa;
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

            .email-capture {
                background-color: #131718;
                padding : 1rem;
                clear:both;
            }
            .i-can-help {
                color:white;
                font-weight:300;
                letter-spacing:.18em;
            }

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

            .errors{
                background: #f9f9c0;
                border: 1px solid #ffff00;
                font-size:1.0rem;
                font-weight:600;
            }

            .message-list-item { text-align: left; list-style-type: none;}

            .success {background: #acf99f; border: 1px solid #2e5d2e; }

            .btn-big {
                width: 203px;
                border-color: #ffffff;
                background: #cccccc;
                transition: all .5s;
                -webkit-transition: all .5s;
                transition-timing-function: linear;
            }
            .btn-big:hover, .btn-big:focus {
                border-color: #66c5ff;
                background-color: #99ccfa;
                transition: all .5s;
                -webkit-transition: all .5s;
                transition-timing-function: linear;
            }

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
                font-weight:100;
                transition: all .5s;
                -webkit-transition: all .5s;
            }
            .square-content p {
                margin: .1em 0;
            }
            .square-content:hover, .square-content:focus {
                color: #999;
                font-size:1.15rem;
                transition: all .5s;
                -webkit-transition: all .5s;
                transition-timing-function: ease-in-out;

            }


            .make .square-content,
            .deliver .square-content,
            .learn .square-content,
            .change .square-content,
            .help .square-content {
                color: #ffffff;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 1.4rem;
                transition: all .5s;
                -webkit-transition: all .5s;
                transition-timing-function: linear;
            }
            .make .square-content:hover,
            .deliver .square-content:hover,
            .learn .square-content:hover,
            .change .square-content:hover,
            .help .square-content:hover,
            .make .square-content:focus,
            .deliver .square-content:focus,
            .learn .square-content:focus,
            .change .square-content:focus,
            .help .square-content:focus {
                color: #99ccfa;
                transition: all .5s;
                -webkit-transition: all .5s;
                transition-timing-function: linear;
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
                cursor: pointer;

            }

            /*  For responsive images */
            /*.square-content .rs {*/
                /*width:auto;*/
                /*height:auto;*/
                /*max-height:90%;*/
                /*max-width:100%;*/
            /*}*/

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
                padding-top: 50px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.8);
            }

            /* Modal Content */
            .modal-content {
                color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #666;
                border-radius: .5em;
                width: 88%;
                background-color:black;
                background-position:top center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #makeModal .modal-content {
                background-image: url('images/make.jpg');
            }
            #deliverModal .modal-content {
                background-position:center center;
                background-image: url('images/deliver.jpg');
            }
            #helpModal .modal-content  {
                background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/help.jpg');
                background-position:bottom center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #learnModal .modal-content {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/learn.jpg');
                background-position:center center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #changeModal .modal-content {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/change.jpg');
                background-position:center center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            .modal-content li{
                list-style-type: square;
                margin: 1em auto;
                text-align:justify;
            }
            /* The Close Button */
            .close {
                color: #cfcfcf;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #fefefe;
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
                <div class="square bg make" id="make">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                <p>Make</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal" id="makeModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="developmentServices">
                            <h2>Development</h2>
                            <ul>
                                <li>Talent Acquisition</li>
                                <li>Back Office</li>
                                <li>Products</li>
                                <li>Software</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell">
                                <p>There is no cake, </p>
                                <p>a wizard stole your pockets, </p>
                                <p>winter is here.</p>
                                <p>What now?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg deliver" id="deliver">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                               <p>Deliver</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="deliverModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="operationsServices">
                            <h2>Operations</h2>
                            <ul>
                                <li>Value Stream Mapping</li>
                                <li>Constraint Mitigation</li>
                                <li>Continuous Integration Delivery Pipelines</li>
                                <li>Security and Transparency like peanut butter and jelly.</li>
                                <li>Version Control Systems Strategy</li>
                                <li>Developer Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell">
                                Build software that feels good.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg help" id="help">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                <p>Help</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="helpModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="continuityServices">
                            <h2>Service Continuity</h2>
                            <ul>
                                <li>A practical approach to service delivery management</li>
                                <li>Outages happen; Lower your cost to recover</li>
                                <li>Learn more from mistakes with custom solutions to suit your needs.</li>
                                <li>Cultivate strong defensive SecOps</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="square">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                Security, quality <em>and</em> velocity.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="square bg learn" id="learn">
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                               <p>Learn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="learnModal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="reportingServices">
                                <h2>Reporting</h2>
                                <ul>
                                    <li>Get feedback early and often</li>
                                    <li>Monitoring and Logging are essential.</li>
                                    <li>Make mistakes, failures and the unknown less costly.</li>
                                </ul>
                            </div>
                        </div>
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
                    <div class="square-content">
                        <div class="table">
                            <div class="table-cell square-links">
                                <p>Change</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="changeModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="disruptionServices">
                            <h2>Disruption as a Service</h2>
                            <ul>
                                <li>Sometimes you have to cut bait.</li>
                                <li>This will hurt.</li>
                                <li>Bullshit-O-Meter set to <em>gnat's ass.</em></li>
                                <li>Here to help.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <hr>

                <div class="email-capture">
                    @if ($errors->count() >= 1)
                        <div class="errors">
                            @foreach($errors->all() as $error)
                                <ul>
                                    <li class="message-list-item">{{ $error }}</li>
                                </ul>
                            @endforeach
                        </div>
                    @else
                        <div class="i-can-help">We can help.</div>
                    @endif
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
                            <textarea name="message" placeholder="message" class="input email message" rows="8" >{{ old('message') }}</textarea>
                        </div>
                        <div class="form-group recaptcha">
                            {!! Recaptcha::render() !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-big">
                               Say Howdy
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
        // Probably the worst javascript written by anyone in 2017.
        link=document.createElement('link');
        link.href='https://fonts.googleapis.com/css?family=Lobster|Raleway:100,300,600';
        link.rel='stylesheet';
        document.getElementsByTagName('head')[0].appendChild(link);
        // Get the modal
        var makeModal = document.getElementById('makeModal');
        var deliverModal = document.getElementById('deliverModal');
        var learnModal = document.getElementById('learnModal');
        var changeModal = document.getElementById('changeModal');
        var helpModal = document.getElementById('helpModal');

        // Get the button that opens the modal
        var make = document.getElementById("make");
        var deliver = document.getElementById("deliver");
        var learn = document.getElementById("learn");
        var change = document.getElementById("change");
        var help = document.getElementById("help");
        // Get the <span> element that closes the modal
        var makeSpan = document.getElementsByClassName("close")[0];
        var deliverSpan = document.getElementsByClassName("close")[1];
        var learnSpan = document.getElementsByClassName("close")[3];
        var changeSpan = document.getElementsByClassName("close")[4];
        var helpSpan = document.getElementsByClassName("close")[2];
        // When the user clicks the button, open the modal
        make.onclick = function() {
            makeModal.style.display = "block";

        }
        deliver.onclick = function() {
            deliverModal.style.display = "block";
        }
        learn.onclick = function() {
            learnModal.style.display = "block";
        }
        change.onclick = function() {
            changeModal.style.display = "block";
        }
        help.onclick = function() {
            helpModal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        makeSpan.onclick = function() {
            makeModal.style.display = "none";
        }
        deliverSpan.onclick = function() {
            deliverModal.style.display = "none";
        }
        learnSpan.onclick = function() {
            learnModal.style.display = "none";
        }
        changeSpan.onclick = function() {
            changeModal.style.display = "none";
        }
        helpSpan.onclick = function() {
            helpModal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == makeModal) {
                makeModal.style.display = "none";
            }
            if (event.target == deliverModal) {
                deliverModal.style.display = "none";
            }
            if (event.target == learnModal) {
                learnModal.style.display = "none";
            }
            if (event.target == changeModal) {
                changeModal.style.display = "none";
            }
            if (event.target == helpModal) {
                helpModal.style.display = "none";
            }
        }
    </script>
    </body>
</html>
