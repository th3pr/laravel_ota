@extends('layouts.loginpage')

@section('login')
    <div class="container">
        <div class="login-fullpage">
            <div class="row">
                <div class="login-logo"><img class="center-image" src="img/11.jpg" alt=""></div>
                <div class="col-xs-12 col-sm-7">
                    <div class="f-login-content">
                        <div class="f-login-header">
                            <div class="f-login-title color-dr-blue-2">Login!</div>
                            <div class="f-login-desc color-grey">Please Login</div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" type="email" value="admin@email.com"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input id="password" type="password" value="secret"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="customCheckLogin" name="remember"
                                    {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                <label class="form-check-label" for="customCheckLogin">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary mt-4">Login</button>
                            </div>
                            <div class="form-group">
                                <div>
                                    Admin Email:admin@email.com ,Password:secret
                                </div>
                                <div>
                                    User Email:user@email.com ,Password:secret
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row mb-3">
                        @if (Route::has('password.request'))
                            <a class="text-gray text-left" style="
                                    padding-left: 20px;
                                " href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a class="text-gray text-right" style="
                                    float: right;
                                    padding-right: 12px;
                                " href="{{ route('register') }}">
                                Create new account
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="full-copy">&copy; 2021 All rights reserved. ITI</div>
    </div>
@endsection
