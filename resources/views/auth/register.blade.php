@extends('layouts.app')

@section('content')
    <section class="hero hero-standard">
        <img src="assets/images/logo.png" alt="">
        <h2>It all starts here</h2>
        <div class="wrapper">
            <div class="form signup">
                <header>Register to Confessions</header>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field input">
                        <label for="name">{{ __('Username') }}</label>
                        <div class="input">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="Enter your username" required
                                autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field input">
                        <label for="email">{{ __('Email Address') }}</label>
                        <div class="input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Enter your email" required
                                autocomplete="email">
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
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Enter your password" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="field input">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <div class="input">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="Re-enter your password" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="link">Already have an account? <a href="{{ route('login') }}"> Login now </a></div>
                    <div class="action">
                        <button type="submit" class="btn btn-primary">Register</button>
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
