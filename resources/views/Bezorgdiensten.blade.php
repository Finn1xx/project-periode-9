
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
@extends('nav')

<main>
</main>
@extends('footer')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center flex-column ">
            <h1 class="textbezorg">Bezorgdiensten</h1>
            <p class="textbezorg"> Als gebruiker wil ik informatie zien over bezorgdiensten zoals UPS, DHL, Homerr, zodat ik kan kiezen voor ophalen en verzenden.</p>
            <p class="textbezorg">Kies een bezorgdienst:</p>
            <ul>
                <li><button class="bezorgdiensten" onclick="selectBezorgdienst('UPS')">UPS</button></li>
                <li><button class="bezorgdiensten" onclick="selectBezorgdienst('DHL')">DHL</button></li>
                <li><button class="bezorgdiensten" onclick="selectBezorgdienst('Homerr')">Homerr</button></li>
                <!-- Voeg hier andere bezorgdiensten toe -->
            </ul>
            <p id="result"></p>
        </div>
    </div>
</div>
<script>
    function selectBezorgdienst(bezorgdienst) {
        document.getElementById('result').innerText = `Je hebt ${bezorgdienst} gekozen.`;
        // Hier kun je verdere acties toevoegen afhankelijk van de geselecteerde bezorgdienst
    }
</script>
</body>
</html>
 