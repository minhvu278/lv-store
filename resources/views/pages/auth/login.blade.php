@extends('pages.auth.layouts.guest')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 p-0">
            <img class="vh-100 mw-100" src="{{ Vite::asset('resources/assets/admin/auth/naafiri.webp') }}" alt="middle">
        </div>
        <div class="col-6 d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column align-items-center">
            <h1 class="mb-4">{{ __('Welcome to our website') }}</h1>
            <form class="w-100 mw-100" action="{{ route('login') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="form-label">{{ __('Email address') }}</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Enter email') }}" required autofocus tabindex="1">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        {{ __('Password') }}
                        @if (Route::has('password.request'))
                            <span class="form-label-description">
                        <a href="{{ route('password.request') }}" tabindex="5">{{ __('Forgot Password?') }}</a>
                    </span>
                        @endif
                    </label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required tabindex="2">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" tabindex="3" name="remember" />
                        <span class="form-check-label">{{ __('Remember me on this device') }}</span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100" tabindex="4">{{ __('Sign in') }}</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
