@extends('layouts.app')

@section('content')
    <section class="hero hero-short">
        <img src="assets/images/logo.png" alt="">
        <h2>It all starts here</h2>
        <div class="wrapper">
            <div class="form signup">
                <header>Login to Confessions</header>
                {{-- @if (session('message'))
                    <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
                @endif --}}
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field input">
                        <label for="email">{{ __('Email Address') }}</label>
                        <div class="input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Enter your email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field input">
                        <label for="password">{{ __('Password') }}</label>
                        <div class="input">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Enter your password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="link">Don't have an account? <a href="{{ route('register') }}"> Register now </a></div>
                    <div class="action">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section  -->
    <section class="footer-st">
        <h3>@Silliman Confessions</h3>
    </section>
@endsection
