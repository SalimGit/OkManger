<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OkManger - Accueil </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('img/LogoOkManger.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/barreRecherche.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal-fx.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/overlayscrollbars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cardAccueil.css') }}" rel="stylesheet">

</head>

<body>
    <style>
        .columns:nth-child(2) {
            margin-top: -10rem;
        }
    </style>
    <div>
        <section class="hero is-primary is-fullheight header-image">
            <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <img src="img/LogoOkManger.png">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                        data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-end ">
                    <div class="navbar-item" >
                        <div class="buttons" style="margin-left: -138%;">
                            <a href="{{ route('cart.show')}}"><button class="button is-info" style="margin-left: 423%;"><i class="fas fa-shopping-bag" style="color: #00d1b1;"></i>&nbsp;{{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}</button>
                            </a>
                            <div class="navbar-end ">
                                @if (Auth::guest())
                            <div class="card-content  modal-button" data-target="modal-card2">
                                <div class="content">
                                    <div class="card-image">
                                    </div>
                                    <div class="Connec" class="card-content  modal-button" data-target="modal-card2">
                                        <div class="content">
                                            <span id="connexion" class="button is-info modal-button">Connexion</span>
                                            @else
                                        </div>
                                        <div class="navbar-item has-dropdown is-hoverable">
                                            <button class="button is-info navbar-link" ><i class="fas fa-user" style="color: #00d1b1;"></i>&nbsp;{{ Auth::user()->name }}</button>

                                            <div class="navbar-dropdown">
                                                <a id="itemscolor" class="navbar-item " href="{{'compte'}}">
                                                    Mon Compte
                                                </a>
                                                <hr>
                                                <a id="itemscolor" class="navbar-item" href="{{'commande'}}">
                                                    Historique de Commandes
                                                </a>
                                                <hr>
                                                <a id="itemscolor" class="navbar-item" href="{{'parrainage'}}">
                                                    Parrainages
                                                </a>
                                                <hr>
                                                <a id="itemscolor"class="navbar-item" href="{{ route('logout') }}"
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
                </div>
    </div>
    </div>
    </nav>
    </section>
    </div>

    <div id="modal-card2" class="modal modal-fx-3dSlit">
        <div class="modal-background"></div>
        <div class="modal-content is-large">
            <!-- content -->
            <div class="card">
                <div class="card-image">
                </div>
                <div class="card-content" id="cardlogin">
                    <div class="media">
                        <div class="media-left">
                        </div>
                        <div class="media-content" id="centerContent">
                            <div>
                                <h1 style="font-size:25px;"><strong>Inscription ou Connexion</strong></h1>
                            </div>
                            <div class="buttons" id="cardConnexion">
                                <a href="{{ url('/auth/redirect/facebook') }}">
                                    <button id="facebook" class="button is-info"><i class="fab fa-facebook-f"
                                        style="height: 24px; width: 24px;"></i>&nbsp;&nbsp;&nbsp;Continuer avec
                                    facebook</button>
                                </a>

                                <a href="{{url('/redirect')}}">
                                    <button id="google" class="button is-white"><i class="fab fa-google"
                                        style="height: 24px; width: 24px; color: #ea4235;"></i>&nbsp;&nbsp;&nbsp;Continuer
                                    avec
                                    google</button>
                                </a>
                                <a href={{('register')}}><button id="mail" class="button is-primary"><i class="fas fa-envelope"
                                            style="height: 24px; width: 24px;"></i>&nbsp;&nbsp;&nbsp;Continuer avec une
                                        adresse mail</button></a>
                            </div>
                            <div class="divider"><span></span><span>OU</span><span></span></div>
                            <div id="CardConnexion2">
                                <a href={{('login')}}><button id="mail" class="button is-link">Se connecter</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">

                </div>
            </div>
        </div>
        <!-- end content -->
    </div>


    <style>
    #itemscolor{
        color: black
    }

    </style>
