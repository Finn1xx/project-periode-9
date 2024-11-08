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

    <h1>Dien een reparatieverzoeken/offertes in</h1>

    <form action="{{ route('repair.request.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titel:</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <div>
            <label for="description">Beschrijving:</label>
            <textarea id="description" name="description" required></textarea>
        </div>


        <button type="submit">Verzend Verzoek</button>
    </form>

</body>

</html>
