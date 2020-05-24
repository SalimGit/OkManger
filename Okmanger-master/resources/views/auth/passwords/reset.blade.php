@extends('layouts.headerAfterLogin')

@section('content')
<br><br><br>

<div class="container">
    <div class="notification is-info">
        <center><strong>Réinitialisation du mot de passe</strong></center>
    </div>
    <hr>
    <div class="card">

        <div class="card-content">
            @if (session('status'))
            <div class="notification is-info">
                {{ session('status') }}
            </div>
            @endif

            <form class="password-reset-form" method="POST" action="{{ route('password.request') }}">

                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token ?? '' }}">


                <div class="field">

                    <label class="label">Email</label>


                    <div class="field">
                        <p class="control">
                            <input class="input" id="email" type="email" name="email" value="{{ old('email') }}"
                                required autofocus>
                        </p>
                        @if ($errors->has('email'))
                        <p class="help is-danger">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label">Mot de passe</label>
                    <p class="control">
                        <input class="input" id="password" type="password" name="password" required>
                    </p>

                    @if ($errors->has('password'))
                    <p class="help is-danger">
                        {{ $errors->first('password') }}
                    </p>
                    @endif
                </div>


                <div class="field">
                    <label class="label">Confirmation du mot de passe</label>
                    <p class="control">
                        <input class="input" id="password-confirm" type="password" name="password_confirmation"
                            required>
                    </p>
                </div>

                    <div class="valider">
                        <button type="submit" class="button is-info">Réinitialiser mot de passe</button>
                    </div>
            </form>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<style>
    .card{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-content{
        width: 40%;
    }
    .valider{
        margin-top: 20px;
        margin-left: 25%;
    }


</style>
@include('layouts.footer')
@endsection
