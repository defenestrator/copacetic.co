<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bulma.css">
    <!-- Styles -->
    <style>
        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            min-width:300px;
        }
        .is-light {
            background-color:#fffaf0;
            background-image: linear-gradient(rgba(255,250,240, 0.8),rgba(242,229,255, 0.8)),linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1440439307159-c3afc8a8e4ff?dpr=1&auto=format&crop=entropy&fit=crop&w=2000&h=1000&q=40');
        }
        .nav {
            padding: 20px 0;
        }
        .hero.is-light a.nav-item, .hero.is-light .nav-item a:not(.button) {
            color:#69707a;
        }
        .hero.is-light .nav-item a:not(.button), .hero.is-dark a.nav-item {
            padding: 0 30px;
        }
        .nav-item {
            font-weight: bold;
            text-transform: uppercase;
        }
        .nav-item .button{
            font-weight: bold;
            text-transform: uppercase;
            background-color: transparent;
            border-color:#69707a;
            padding: 10px 20px;
            height: 45px;
            border-radius;
        }
        .nav-item a:hover, a.nav-item:hover {
            border-color:#84616b;
            color: #84616b;
        }
        .promo-img {
            border-radius: 10px;
        }
        .button.is-danger.is-outlined {
            border-color:#87616b;
            color: #87616b;
        }
    </style>
</head>
<body>
<section class="hero is-fullheight is-light">
    <div class="hero-head">
        <div class="container">
            <nav class="nav">
                <div class="container">
                    <div class="nav-left">
                        <a class="nav-item" href="../index.html">
                            Copacetic Consulting
                        </a>
                    </div>
            <span class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
            </span>
                    <div class="nav-right nav-menu">
                        <a class="nav-item">
                            About
                        </a>
                        <a class="nav-item">
                            Tour
                        </a>
                        <a class="nav-item">
                            FAQ
                        </a>
                        <a class="nav-item">
                            Contact
                        </a>
              <span class="nav-item">
                <a class="button is-default">
                    Get Early Access
                </a>
              </span>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-5">
                    <figure class="image is-4by3">
                        <img src="/images/copacetic.co-face.png" class="promo-img" title="Copacetic - Blissful Software Delivery Consulting" alt="Copacetic - Blissful Software Delivery Consulting">
                    </figure>
                </div>
                <div class="column is-6 is-offset-1">
                    <h1 class="title is-2">
                        Blissful Software Delivery
                    </h1>
                    <h2 class="subtitle is-4">
                        Totally copacetic.
                    </h2>
                    <br>
                    <p class="control has-addons has-text-centered">
                        <input class="input is-expanded" type="text" placeholder="Get some love.">
                        <a class="button is-danger is-outlined">
                            Sign Up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-foot">
        <div class="container">
            <div class="tabs is-centered">
                <ul>
                    <li><a>&copy; Copacetic Media {{ \Carbon\Carbon::now('PDT') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script async type="text/javascript">
    // The following code is based off a toggle menu by @Bradcomp
    // source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
    (function() {
        var burger = document.querySelector('.nav-toggle');
        var menu = document.querySelector('.nav-menu');
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();
</script>
</body>
</html>

