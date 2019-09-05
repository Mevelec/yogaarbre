@extends('layouts.main')

@section('title', 'Creation Compte')

{{-- HEADER--}}
    @push('header')
    @endpush
    @push('css')
        <link rel="stylesheet" href="{{mix('/css/auth.css')}}">
    @endpush

{{-- BODY --}}
    @section('menu')
        @include('components.menus.menu')
    @stop

    @section('content')
        <div class="auth background-center">
            <div class="row justify-content-md-center">
                <div class="col-xs-10 col-md-6 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Créer un compte</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-xs-12 control-label">Nom</label>
                                    <div class="col-xs-12">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-xs-12 control-label">E-Mail</label>

                                    <div class="col-xs-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-xs-12 control-label">Mot de passe</label>

                                    <div class="col-xs-12">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-xs-12 control-label">Entrez le mot de passe à nouveau</label>

                                    <div class="col-xs-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Créer votre compte
                                        </button>
                                        <a class="btn btn-link" href="{{ url('/login') }}">
                                            J'ai déja un compte
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

{{-- JS--}}
    @push('js')
            
    @endpush