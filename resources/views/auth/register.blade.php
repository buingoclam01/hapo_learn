@extends('layouts.app')

@section('content')
<div class="container-fluid logout">
    <div class="row justify-content-center">
        <div class="col-lg-6 logout-form">
            <div class="card">
                <div class="card-header">{{ __('message.sign_up_hapolearn') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="name" class="logout-conten">{{ __('message.name') }}</label>

                            <div class="input-logout">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="logout-conten">{{ __('message.email_address') }}</label>

                            <div class="input-logout">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="logout-conten">{{ __('message.password') }}</label>

                            <div class="input-logout">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password-confirm" class="logout-conten">{{ __('message.confirm_password') }}</label>
                            <div class="input-logout">
                                <input id="password-confirm" type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirm"  autocomplete="current-password">
                                @error('password_confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group  mb-0">
                            <div class="sign-up">
                                <button type="submit" class="btn-register">
                                    {{ __('message.sign_up') }}
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
