<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account</title>
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
    <div class="login-signup">
        <h1>Het lijkt erop dat jij niet ingelogd bent</h1>
        <a href="{{ route('login') }}"><button>Log In</button></a>
        <button onclick="window.location.href='{{ route('register') }}'">Sign Up</button>
    </div>
</div>
</body>
</html>
