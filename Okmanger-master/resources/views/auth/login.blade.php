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
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<link rel="icon" href="img/LogoOkManger.png" />
<title>OkManger - Connexion</title>
<script defer src="public/js/all.js"></script>
</head>

<body style="background-image: url(/img/fondOkMange.png);">
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="column">
                        <div class="box1">
                            <div class="connectezVous">
                                <h2>Connectez vous</h2>
                            </div>
                            <form class="box" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="field">
                                    <div class="field-label">
                                        <label class="label">E-Mail</label>
                                    </div>

                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control">
                                                <input class="input" id="email" type="email" name="email"
                                                       value="{{ old('email') }}" required autofocus>
                                            </p>

                                            @if ($errors->has('email'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('email') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="field-label">
                                        <label class="label">Mot de passe</label>
                                    </div>

                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control">
                                                <input class="input" id="password" type="password" name="password" required>
                                            </p>

                                            @if ($errors->has('password'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('password') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="field-label"></div>

                                    <div class="field-body">
                                        <div class="field">
                                            <p class="control">
                                                <label class="checkbox">
                                                    <input type="checkbox"
                                                           name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                                </label>
                                                <div class="control">
                                                    <a href="{{ route('password.request') }}">
                                                        Mot de passe oublié ?
                                                    </a>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>



                                <div class="field is-horizontal">
                                    <div class="field-label"></div>

                                    <div class="field-body">
                                        <div class="field is-grouped">
                                            <div class="control">
                                                <button type="submit" class="button is-primary is-large">Se connecter</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

