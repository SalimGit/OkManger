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
<style>
    .columns:nth-child(2) {
        margin-top: -10rem;
    }

    .input {
        width: 460px;

    }

    .box {
        width: 500px;
        height: 597px;
        margin: -100px auto auto;
    }

    .box1 {
        width: 600px;
        height: 850px;
        background-color: #00d1b2;
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 60px;
    }

    .inscrivezVous {
        top: 5px;
        position: relative;
        font-size: 50px;
        text-align: center;
        color: white;
    }

    .button{
        margin-left: 317px;
        margin-top: 15px;
    }

    .label{
        display: flex;
        justify-content: flex-start;
    }

    .select{
        display: flex;
        justify-content: flex-end;
        margin-top: 15px;
        margin-bottom: 15px;
    }


    body {
        background-image: url("/img/fondOkMange.png");
    }

</style>
<link rel="icon" href="public/img/LogoOkManger.png" />
<title>OkManger - Connexion</title>
<script defer src="public/js/all.js"></script>
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="column">
                        <div class="box1">
                            <div class="inscrivezVous">
                                <h2>Inscrivez vous</h2>
                                <br><br>
                            </div>
                            <form class="register-form box" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="field has-text-centered">

                                <div class="select is-large">
                                    <select name="category" required>
                                        <option value="Particulier">Particulier</option>
                                        <option value="Entreprise">Entreprise</option>
                                        <option value="Ecole">Ecole</option>
                                    </select>
                                    </div>


                                    <div class="field">
                                        <div class="field-label">
                                            <label class="label">Nom</label>
                                        </div>

                                        <div class="field-body">
                                            <div class="field">
                                                <p class="control">
                                                    <input class="input" id="name" type="name" name="name"
                                                        value="{{ old('name') }}" required autofocus>
                                                </p>

                                                @if ($errors->has('name'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('name') }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="field-label">
                                            <label class="label">Prénom</label>
                                        </div>

                                        <div class="field-body">
                                            <div class="field">
                                                <p class="control">
                                                    <input class="input" id="name" type="name" name="firstname"
                                                        value="{{ old('firstname') }}" required autofocus>
                                                </p>

                                                @if ($errors->has('firstname'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('firstname') }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="field-label">
                                            <label class="label">E-mail</label>
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
                                                    <input class="input" id="password" type="password" name="password"
                                                        required>
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
                                        <div class="field-label">
                                            <label class="label">Confirmation mot de passe</label>
                                        </div>

                                        <div class="field-body">
                                            <div class="field">
                                                <p class="control">
                                                    <input class="input" id="password-confirm" type="password"
                                                        name="password_confirmation" required>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="field-label"></div>

                                        <div class="field-body">
                                            <div class="field is-grouped">
                                                <div class="control">
                                                    <button type="submit" class="button is-primary is-large">S'inscrire</button>
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

</html>
