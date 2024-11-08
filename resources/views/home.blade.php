<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
                <li class="bluec"><a href="{{ url('/afspraken') }}">Afspraken Systeem</a></li> <!-- Nieuwe link toegevoegd -->
            </ul>
        </div>
    </nav>
    <main id="mainhome">
        <div id="hometext">
            <img src="{{ asset('img/cropped-logo uneed-it(notext).png') }}" alt="Uneed-IT">
            <p><span class="white-text">Voor al uw reparaties kunt u terecht bij </span><span class="red-text">Uneed-</span><span class="blue-text">it</span></p>
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
</body>

</html>
 