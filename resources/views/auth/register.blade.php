@extends('layouts.app')

@section('content')
<div class="container-fluid logout">
    <div class="row justify-content-center">
        <div class="col-lg-6 logout-form">
            <div class="card">
                <div class="card-header">{{ __('Sign in to HapoLearn') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group >
                            <label for="name" class="col-md-4 col-form-label logout-conten">{{ __('Username') }}</label>

                            <div class="input-logout">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group >
                            <label for="email" class="col-md-4 col-form-label logout-conten">{{ __('Email') }}</label>

                            <div class="input-logout">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group >
                            <label for="password" class="col-md-4 col-form-label logout-conten">{{ __('Password') }}</label>

                            <div class="input-logout">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group >
                            <label for="password-confirm" class="col-md-4 col-form-label logout-conten">{{ __('Confirm Password') }}</label>

                            <div class="input-logout">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="sign-up">
                                <button type="submit" class="btn-register">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
