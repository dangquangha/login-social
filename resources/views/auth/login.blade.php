@extends('layouts.app')

@section('title', 'Login')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('login.social', 'google') }}" class="btn form-control login-social login-gg">
                                <img src="{{ asset('images/icon-google.jpg') }}" alt="">
                                Login with Google
                            </a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('login.social', 'facebook') }}" class="btn form-control login-social login-fb">
                                <img src="{{ asset('images/icon-facebook.png') }}" alt="">
                                Login with Facebook
                            </a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('login.social', 'linkedin') }}" class="btn form-control login-social login-linkedin">
                                <img src="{{ asset('images/icon-linkedin.svg') }}" alt="">
                                Login with Linkedin
                            </a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3 text-center">
                            <span class="text-muted">OR<span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                required placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary form-control">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
