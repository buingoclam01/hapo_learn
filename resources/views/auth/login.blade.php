@extends('layouts.app')

@section('content')
<div class="container-fluid login">
    <div class="row justify-content-center">
        <div class="col-lg-6 login-form">
            <div class="card">
                <div class="card-header">{{ __('message.sign_in_to_hapolearn') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Username') }}</label>

                            <div class="col-md-6 input-login">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                            <div class="col-md-6 input-login">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-20">
                            <div class="col-md-8 login-btn-container">
                                <button type = "submit" class = "btn">{{ __('Sign in') }}</button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                        <div class="form-group mt-40">
                            <div class="form-text">
                                <hr>
                                <p> Sign in with</p>
                            </div>
                            <a href ="#" class="btn btn-google mt-40">
                            <i class="fa-brands fa-google-plus-g"></i>
                                 Google
                            </a>
                            <div class="form-text mt-40">
                                <hr>
                                <p> or New to HapoLearn</p>
                            </div>
                            <a href="{{ route('register') }}" class="btn btn-register">
                                <span>{{ __('Create New Account') }}</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
