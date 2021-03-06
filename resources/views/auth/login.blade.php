@extends('layouts.main')

@section('title', 'Page Title')

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
                        <div class="panel-heading">Me connecter</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-xs-12 control-label">E-Mail</label>

                                    <div class="col-xs-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                    <div class="col-xs-12 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Me connecter
                                        </button>
                                    </div>
                                    <div class="col-xs-12 col-md-offset-4">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Mot de passe oublié?
                                        </a><br>
                                        <a class="btn btn-link" href="{{ url('/register') }}">
                                            Créer mon compte
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