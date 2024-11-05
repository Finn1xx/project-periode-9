<!-- resources/views/verzoeken/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verzoeken</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav id="navbar">
        <!-- Voeg hier je navigatie toe -->
    </nav>
    <main id="mainVerzoeken">
        <h1>Alle Reparatieverzoeken</h1>
        @if($requests->isEmpty())
            <p>Er zijn momenteel geen verzoeken.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>E-mail</th>
                        <th>Beschrijving</th>
                        <th>Datum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->email }}</td>
                            <td>{{ $request->description }}</td>
                            <td>{{ $request->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </main>
</body>
</html>
