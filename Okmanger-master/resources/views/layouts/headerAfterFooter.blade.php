<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


    <link rel="shortcut icon" href="{{ asset('img/LogoOkManger.png') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal-fx.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cardRestaurant.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carrousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/payement.css') }}" rel="stylesheet">
    <link href="{{ asset('css/overlayscrollbars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/a.css') }}" rel="stylesheet">
    <link href="{{ asset('css/titreRestaurant.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filterDeux.css') }}" rel="stylesheet">

    </head>
    <style>
        .columns:nth-child(2) {
            margin-top: -10rem;
        }
    </style>
    <header>

        <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
            <a class="navbar-item" href="{{'accueil'}}">
                    <img src="img/LogoOkManger.png" >
                </a>
            </div>


            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Découvrir OkManger
                </a>

                <div class="navbar-dropdown">
                  <a class="navbar-item" href={{('aPropos')}}>
                    A propos
                  </a>
                  <a class="navbar-item" href={{('inscriptionResto')}}>
                    Inscription restaurant
                  </a>
                  <a class="navbar-item" href={{('cityManager')}}>
                    Devenir City-Manager
                  </a>
                  <a class="navbar-item" href={{('nousRejoindre')}}>
                    Nous rejoindre
                  </a>
                </div>
              </div>

              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Mentions légales
                </a>

                <div class="navbar-dropdown">
                  <a class="navbar-item" href={{('mentionLegal')}}>
                    Mentions légales
                  </a>
                  <a class="navbar-item" href={{('confidentialite')}}>
                    Confidentialité
                  </a>
                  <a class="navbar-item" href={{('cookies')}}>
                    Cookies
                  </a>
                  <a class="navbar-item" href={{('CGU')}}>
                    CGU
                  </a>
                </div>
              </div>

              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Aider
                </a>

                <div class="navbar-dropdown">
                  <a class="navbar-item" href={{('contact')}}>
                    Nous contacter
                  </a>
                  <a class="navbar-item" href={{('FAQ')}}>
                    FAQ
                  </a>
                </div>
              </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <body>
