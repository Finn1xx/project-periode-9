<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zakelijk</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
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

                    const verzoekenBtn = document.getElementById("verzoekenBtn");
                    if (!verzoekenBtn) {
                        console.error("verzoekenBtn is niet gevonden in de DOM.");
                        return; // Stop de functie als de knop niet gevonden is
                    }

                    // Toon de knop voor admin
                    if (data.role === 'admin') {
                        console.log("Admin user - knop wordt zichtbaar");
                        verzoekenBtn.style.display = "block"; // Laat de knop zien
                    } else {
                        console.log("Regular or guest user - knop wordt verborgen");
                        verzoekenBtn.style.display = "none"; // Verberg de knop voor andere gebruikers
                    }
                })
                .catch(error => console.error('Error fetching user role:', error));
        }

        // Functie om naar de reparatieverzoekpagina te navigeren
        function navigateToRepairRequest() {
            window.location.href = "/reparatieverzoek"; // Zorg ervoor dat deze route bestaat in Laravel
        }

        // Functie om naar de verzoeken pagina te navigeren
        function viewRequests() {
            window.location.href = "/verzoeken"; // Zorg ervoor dat deze route bestaat in Laravel
        }
    </script>
</head>

<body>
@extends('nav')

<main>
    <div class="container zakelijkContainer">
        <div class="row">
            <div class="col-12 zakelijkCol">
                <div class="col-12 pb-5 d-flex justify-content-center align-items-center flex-column">
                    <h1>Welkom!</h1>
                    <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
                </div>
                <div class="col-12">
                    <div class="buttons">
                        <button onclick="navigateToRepairRequest()">reparatieverzoek aanvragen</button>
                        <button onclick="viewRequests()" id="verzoekenBtn">Verzoeken bekijken</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@extends('footer')
<script>
    // Roep de functie aan wanneer de pagina geladen is
    document.addEventListener('DOMContentLoaded', checkUserRole);
</script>
</body>
</html>
