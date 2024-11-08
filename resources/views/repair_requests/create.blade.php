<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nieuw Reparatieverzoek</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<nav id="navbar">
        <div id="logonav">
            <img src="{{ asset(path: 'img/cropped-logo UNEED-IT.png') }}" alt="Uneed-IT Logo">
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

    <h1>Dien een Reparatieverzoek in</h1>

    <form action="{{ route('repair.request.store') }}" method="POST">
        @csrf
        <!-- Veld voor titel (title) van het reparatieverzoek -->
        <div>
            <label for="title">Titel:</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <!-- Veld voor de beschrijving (description) van het probleem -->
        <div>
            <label for="description">Beschrijving:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <!-- Veld voor naam van de gebruiker -->
        <div>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- Veld voor email van de gebruiker -->
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Standaard de status is pending, deze hoeft niet in het formulier te komen -->

        <button type="submit">Verzend Verzoek</button>
    </form>

</body>

</html>
