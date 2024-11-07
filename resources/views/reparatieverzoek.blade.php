<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nieuw Reparatieverzoek</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <a href="{{ url('/zakelijk') }}">Terug naar Zakelijk</a>
    </nav>

    <h1>Dien een Reparatieverzoek in</h1>

    <form action="{{ route('repair.request.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="description">Beschrijving:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <button type="submit">Verzend Verzoek</button>
    </form>

</body>

</html>
