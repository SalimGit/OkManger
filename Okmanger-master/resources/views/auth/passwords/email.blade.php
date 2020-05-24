@extends('layouts.headerAfterLogin')

@section('content')
<br><br><br>

<div class="container">

    <div class="notification is-info">
        <center><strong>Mot de passe oublié ?</strong></center>
    </div>
    <hr>
    <div class="card">

        <div class="card-content">
            @if (session('status'))
            <div class="notification">
                {{ session('status') }}
            </div>
            @endif
            <p>Renseignez simplement votre adresse mail et un lien de réinitialisation de votre mot de passe vous sera envoyé.</p>

            <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">

                {{ csrf_field() }}

                <label class="label">Email</label>

                <p class="control">
                    <input class="input" type="email" name="email" placeholder="okmanger@gmail.com"
                        value="{{ old('email') }}" required autofocus>
                </p>

                @if ($errors->has('email'))
                <p class="help is-danger">
                    {{ $errors->first('email') }}
                </p>
                @endif

                <div class="valider">
                    <button type="submit" class="button is-info">Envoie du lien
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br>

<style>
    .card {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .label{
        margin-top: 20px;
      }
    .form{
        display: flex;
    }
    .valider{
        margin-top: 20px;
        margin-left: 40%;
      }
</style>

@include('layouts.footer')
@endsection
