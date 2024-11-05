<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
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

    <div class="container">
        <h1>Maak een nieuw account aan</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required autofocus>
            </div>
            <div>
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Bevestig Wachtwoord:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div>
                <button type="submit">Registreer</button>
            </div>
        </form>
    </div>
</body>
</html>