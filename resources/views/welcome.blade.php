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
            p {
                margin: .1em 0;
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

            .footer {
                font-size: 0.67rem;
                padding: .5rem 0;
            }

            .copyright {
                font-family:"Lobster", sans-serif
            }

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
                font-family:"Lobster", sans-serif;
                font-size:2rem;
                padding:2rem;
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
                border-color: #5784d1;
                background: #FFFAF0;
                color: #303637;
                transition: all .25s;
                -webkit-transition: all .25s;
                transition-timing-function: linear;
                font-weight:600;
                text-transform: uppercase;
                font-size:1.2rem;
                letter-spacing:.5rem;
                padding:0;
            }
            .btn-big:hover, .btn-big:focus {
                border-color: #66c5ff;
                background-color: #99ccfa;
                color: #213047;
                transition: all .25s;
                -webkit-transition: all .25s;
                transition-timing-function: linear;
            }

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
                font-family:"Raleway", sans-serif;
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
                background-size:cover;
                cursor: pointer;

            }

            /*  For responsive content images */
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
            /* Modal */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                padding-top: 50px;
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
                background-position:top left;
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
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/learn.jpg');
                background-position:top center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            #changeModal .modal-content {
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/change.jpg');
                background-position:center center;
                background-repeat:no-repeat;
                background-size:cover;
            }
            .modal-content li{
                list-style-type: square;
                margin: 1em auto;
                text-align:justify;
            }
            /* Modal Close Button */
            .close {
                color: #cfcfcf;
                float: right;
                font-size: 32px;
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
                            <span class="close" id="makeClose">&times;</span>
                            <div class="developmentServices">
                                <h2>Development</h2>
                                <ul>
                                    <li>Curated talent acquisition</li>
                                    <li>Flash-team resources</li>
                                    <li>Back Office solutions</li>
                                    <li>Application development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell">
                                    <p>There is no cake.</p>
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
                            <span class="close" id="deliverClose">&times;</span>
                            <div class="operationsServices">
                                <h2>Operations</h2>
                                <ul>
                                    <li>Value Stream Mapping</li>
                                    <li>Constraint Mitigation</li>
                                    <li>Continuous Integration Delivery Pipelines</li>
                                    <li>Security and Transparency like peanut butter and jelly</li>
                                    <li>Version Control Systems Logistics</li>
                                    <li>Developer Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell">
                                    <p>Build software that feels good.</p>
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
                            <span class="close" id="helpClose">&times;</span>
                            <div class="continuityServices">
                                <h2>Service Continuity</h2>
                                <ul>
                                    <li>Outages happen; Lower your cost to recover</li>
                                    <li>A practical approach to service delivery management</li>
                                    <li>Cultivate strong defensive SecOps</li>
                                    <li>Learn more from mistakes with custom solutions to suit your needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Security, quality <em>and</em> velocity.</p>
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
                                <span class="close" id="learnClose">&times;</span>
                                <div class="reportingServices">
                                    <h2>Reporting</h2>
                                    <ul>
                                        <li>Monitoring and Logging essentials.</li>
                                        <li>Make mistakes, failures and the unknown less costly.</li>
                                        <li>Get usage feedback early and often</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="square">
                        <div class="square-content">
                            <div class="table">
                                <div class="table-cell square-links">
                                    <p>Do it again.</p>
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
                            <span class="close" id="changeClose">&times;</span>
                            <div class="disruptionServices">
                                <h2>Disruption as a Service</h2>
                                <ul>
                                    <li>Sometimes you have to cut bait.</li>
                                    <li>This will hurt.</li>
                                    <li>Bullshit detector set to <em>gnat's ass.</em></li>
                                    <li>We're here to help.</li>
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
                               Howdy!
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
                    <p class="copyright">&copy; Copacetic Media </p>
                    <p>{{ \Carbon\Carbon::now('America/Denver') }}</p>
                </div>
            </div>
        </div>
    <script>
        // Async loading of external fonts.
        link=document.createElement('link');
        link.href='https://fonts.googleapis.com/css?family=Lobster|Raleway:100,300,600';
        link.rel='stylesheet';
        document.getElementsByTagName('head')[0].appendChild(link);
        var offerings = ["make", "deliver", "help", "learn", "change"];


        // toggle display:block || display:none
        var toggleVisibility = function (targetName) {
            var target = document.getElementById(targetName);
            target.style.display = target.style.display == "block" ? "none" : "block";
        }

        // build modal click handlers
        var modalBuilder = function() {
            offerings.forEach( function(offering) {
                var listener = document.getElementById(offering).getAttribute("id")
                var modal = listener + "Modal";
                var close = listener + "Close";
                document.getElementById(listener).addEventListener("click", function () {
                        toggleVisibility(modal);
                });
                document.getElementById(modal).addEventListener("click", function () {
                    if (document.getElementById(event.target.id) == close) {
                        return toggleVisibility(modal);
                    }
                    else if (document.getElementById(event.target.id) == null) {
                        return;
                    }
                    toggleVisibility(modal);
                });
            });
        }

        window.onload = modalBuilder();
    </script>
    </body>
</html>
