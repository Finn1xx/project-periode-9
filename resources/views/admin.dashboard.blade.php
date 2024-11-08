<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
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
                <!-- Add a logout link here for the admin to log out -->
                <li class="redc"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
        </div>
    </nav>

    <main id="admin-dashboard">
        <div id="dashboard-welcome">
            <h1>Welkom, {{ auth()->user()->name }}!</h1> <!-- Display the logged-in user's name -->
            <p>Welkom op het admin-dashboard van Uneed-IT. Hier kun je verschillende beheeracties uitvoeren.</p>
        </div>

        <div id="admin-actions">
            <h2>Beheeropties:</h2>
            <ul>
                <li><a href="{{ route('verzoeken.index') }}">Bekijk Reparatieverzoeken</a></li>
                <li><a href="{{ route('appointments.index') }}">Bekijk Afspraakbeheer</a></li>
                <li><a href="{{ url('/zakelijk') }}">Zakelijke Diensten</a></li>
                <!-- Add more actions here as needed -->
            </ul>
        </div>
    </main>

    <footer id="footer">
        <div id="adress">
            <img src="{{ asset('img/location.png') }}" alt="Location Icon">
            <p>Zuidbaan 514, 2841MD</p>
            <p>Moordrecht</p>
        </div>
        <div id="telefoonnnummer">
            <img src="{{ asset('img/phone.png') }}" alt="Phone Icon">
            <p>+316 30 985 409 (Servicenummer)</p>
            <p>+3118 28 202 18 (Kantoor)</p>
            <p>Bereikbaar van 09:00 - 18:00</p>
        </div>
        <div id="tijd">
            <img src="{{ asset('img/clock.png') }}" alt="Clock Icon">
            <p>Ma t/m Vrij, 09:00 - 23:00</p>
            <p>Telefonsich bereikbaar voor abonnementhouders</p>
        </div>
    </footer>

    <!-- Logout form for admin -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>

</html>
