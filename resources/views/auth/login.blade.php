@extends('layouts.app')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
<div class="container">
    <nav id="navbar">
        <div id="logonav">
            <img src="{{ asset('img/cropped-logo UNEED-IT.png') }}" alt="Uneed-IT Logo">
        </div>
        <div id="logoptions">
            <ul>
                <li class="redc"><a href="{{ url('/') }}">Home</a></li>
                <li class="bluec"><a href="{{ url('/over-ons') }}">Over ons</a></li>
                <li class="redc"><a href="{{ url('/service') }}">Service</a></li>
                <li class="bluec"><a href="{{ url('/zakelijk') }}">Zakelijk</a></li>
                <li class="redc"><a href="{{ url('/faq') }}">Faq</a></li>
                <li class="bluec"><a href="{{ url('/Bezorgdiensten') }}">Bezorgdiensten</a></li>
                <li class="redc"><a href="{{ url('/login_or_signup') }}">Account</a></li>
            </ul>
        </div>
    </nav>

    <div class="form-container">
        <h1>Login</h1>

        @if ($errors->any())
            <div class="error-list">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Input -->
            <div class="form-group">
                <label for="email">E-mailadres:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Onthoud mij</label>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <!-- Forgot Password Link -->
            <div class="form-group">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
