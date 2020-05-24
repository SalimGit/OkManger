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
    <script src="{{ asset ('js/app.js') }}" defer></script>


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
            <a class="navbar-item" href="{{'/accueil'}}" >
                    <img src="/img/LogoOkManger.png" >
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item" >
                    <div class="buttons" style="margin-left: -138%;">
                        <a href="{{ route('cart.show')}}"><button class="button is-info" style="margin-left: 369%;"><i class="fas fa-shopping-bag" style="color: #00d1b1;"></i>&nbsp;{{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}</button>

                        </a>
                        <div class="navbar-end">
                            @if (Auth::guest())
                            <a class="navbar-item " href="{{ route('login') }}"><button class="button is-info">Connexion</button></a>
                            <a class="navbar-item " href="{{ route('register') }}"><button class="button is-info">Inscription</button></a>
                            @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a><button class="button is-info navbar-link" ><i class="fas fa-user" style="color: #00d1b1;"></i>&nbsp;{{ Auth::user()->name }}</button></a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="{{'/compte'}}">
                                        Mon Compte
                                    </a>
                                    <hr>
                                    <a class="navbar-item" href="{{route ('order.index') }}">
                                        Historique de Commandes
                                    </a>
                                    <hr>
                                    <a class="navbar-item" href="{{'/parrainage'}}">
                                        Parrainages
                                    </a>
                                    <hr>
                                    <a class="navbar-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Deconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <body>
