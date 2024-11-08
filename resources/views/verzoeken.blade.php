<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zakelijk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.onload = function() {
            checkUserRole(); // Controleer de gebruikersrol bij het laden van de pagina
        };

        // Functie om de gebruikersrol te controleren
        function checkUserRole() {
            fetch('/checkUserRole')  // Laravel route zonder .php
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Netwerkresponse was niet ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('User role:', data.role); // Controleer de rol in de console

                    // Knop voor offertes
                    const offertesBtn = document.getElementById("offertesBtn");
                    if (data.role === 'admin') {
                        console.log("Admin user - knop wordt zichtbaar");
                        offertesBtn.style.display = "block"; // Laat de knop zien voor admin
                    } else {
                        console.log("Regular or guest user - knop wordt verborgen");
                        offertesBtn.style.display = "none"; // Verberg de knop voor andere gebruikers
                    }
                })
                .catch(error => console.error('Error fetching user role:', error));
        }

        // Functie om naar de verzoeken pagina te navigeren
        function viewRequests() {
            window.location.href = "/verzoeken"; // Zorg ervoor dat deze route bestaat in Laravel
        }

        // Functie om naar de reparatieverzoekpagina te navigeren
        function navigateToRepairRequest() {
            window.location.href = "/reparatieverzoek"; // Zorg ervoor dat deze route bestaat in Laravel
        }
    </script>
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
<main id="mainZakelijk">
    <div class="block-text">
        <h1>Welkom!</h1>
        <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
        <div class="buttons">
            <!-- Knop voor verzoeken bekijken (moet zichtbaar zijn voor iedereen) -->
            <button onclick="viewRequests()">Verzoeken bekijken</button>
            <!-- Knop voor offertes bekijken (alleen zichtbaar voor admin) -->
            <button id="offertesBtn" style="display: none;" onclick="navigateToRepairRequest()">Offertes bekijken</button>
        </div>
    </div>
</main>

<script>
    // Roep de functie aan wanneer de pagina geladen is
    document.addEventListener('DOMContentLoaded', checkUserRole);
</script>
</body>
</html>
