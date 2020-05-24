@extends('layouts.headerAfterLogin')

@section('content')

    <div >
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <div class="cardMargini">
                    <div class="cardverif">
                        <header class="card-header">
                            <p  class="card-header-title">{{ __('Vérifier votre adresse mail') }}</p>
                        </header>

                        <div class="card-content">
                            @if (session('resent'))
                            <div class="notification is-success">
                                <button class="delete"></button>
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                            @endif

                            {{ __('Avant de continuer, veuillez vérifier vos e-mail afin de confirmer l\'inscription.') }}
                            {{ __('Si vous n\'avez pas reçu l\'e-mail') }}, <a
                                href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en demander un autre') }}</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

<style>
    .cardverif{
        display: grid;
        grid-template-columns: 503px;
        grid-template-rows: 68px -6px 23px;
        grid-template-areas: "image""text""stats";
        border-radius: 18px;
        background: white;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
        font-family: roboto, serif;
        text-align: center;
        transition: 0.5s ease;
        cursor: pointer;
        margin: 33px 33px 27rem;
    }

    .cardMargini{
        margin-top: 50%;
    }
</style>
