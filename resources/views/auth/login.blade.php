@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card main-login-card">
                    <div class="card-header main-logo-header">
                        <img src="/images/logo.svg" alt="logo">
                    </div>
                    <div class="login-page-title">
                        <h1>Проектный сервис </h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="login-btn">
                                        {{ __('Войти') }}
                                    </button>
                                </div>
                            </div>
                            <div id="login-nav-content" class="container">
                                <ul class="nav nav-tabs">
                                    <li class="active phone-link"><a href="#phone" data-toggle="tab">по номеру телефона</a></li>
                                    <li class="sms-link"><a href="#sms" data-toggle="tab">по электронной почте</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="phone">
                                        <div class="phone-input-block">
                                            <input type="tel" id="phone-tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        </div>
                                        <div class="phone-input-block">
                                            <button type="submit" class="btn ">
                                                {{ __('Получить пароль') }}
                                            </button>
                                        </div>
                                        <div class="phone-input-block">
                                            <a href="#" class="create-an-account">Создать учетную запись</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="sms">
                                        <div class="phone-input-block">
                                            <input type="mail" id="phone-tel" name="mail">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-bottom-content">
        <div class="image-top">
            <img src="/images/mainPlug.svg" alt="top">
        </div>
        <div class="main-image">
            <img src="/images/mainBg.jpg" alt="main">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</div>
@endsection
