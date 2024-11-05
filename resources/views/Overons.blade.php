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
        <img src="{{ asset(path: 'img/cropped-logo%20UNEED-IT.png') }}" alt="Uneed-IT Logo">
    </div>
    <div id="logoptions">
        <ul>
        <li class="redc"><a href="{{ url('/') }}">Home</a></li> <!-- Aangepast -->
            <li class="bluec"><a href="{{ url('/over-ons') }}">Over ons</a></li>
            <li class="redc"><a href="{{ url('/service') }}">Service</a></li> <!-- Aangepast -->
            <li class="bluec"><a href="{{ url('/zakelijk') }}">Zakelijk</a></li> <!-- Aangepast -->
            <li class="redc"><a href="{{ url('/faq') }}">Faq</a></li> <!-- Aangepast -->
            <li class="bluec"><a href="{{ url('/Bezorgdiensten') }}">Bezorgdiensten</a></li> <!-- Aangepast -->
            <li class="redc"><a href="{{ url('/login_or_signup') }}">Account</a></li> <!-- Aangepast -->
        </ul>
    </div>
</nav>
<main id="mainOverOns" >
    <div class="red-text" >
        <p > Over Ons</p>
    </div>
    <div class="ootext">
        <p class="white-text">
            Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it streven we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid en excellentie in kwaliteit.
        </p>
        <p class="white-text">
            Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat te herstellen.
        </p>
        <p class="white-text">
            Bij Uneed-it streven we naar een naadloze ervaring, vanaf het moment dat u contact met ons opneemt tot het moment dat u tevreden bent met de uitgevoerde reparatie. We begrijpen hoe essentieel uw apparaten zijn voor uw dagelijks leven, en daarom doen we er alles aan om ze snel en efficiënt te repareren, zodat u snel weer verder kunt.
        </p>
        <p class="white-text">
            Kies Uneed-it voor een professionele reparatieservice waarop u kunt vertrouwen. We staan klaar om u te helpen met al uw reparatiebehoeften.
        </p>
    </div>
</main>
</body>
</html>