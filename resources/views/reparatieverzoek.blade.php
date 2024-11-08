<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nieuw Reparatieverzoek</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <a href="{{ url('/zakelijk') }}">Terug naar Zakelijk</a>
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

        <!-- Standaard de status is pending, deze hoeft niet in het formulier te komen -->

        <button type="submit">Verzend Verzoek</button>
    </form>

</body>

</html>
