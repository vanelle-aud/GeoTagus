@extends('layouts.app', ['title' => 'Verification'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifiez votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de verification a ete envoyé a votre adresse mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, svp verifiez votre boite mail pour le lien de verification.') }}
                    {{ __(' Si vous n avez pas reçu l email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Cliquez ici pour envoyer un autre') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
