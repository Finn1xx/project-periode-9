<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reparatieverzoeken</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <a href="{{ url('/zakelijk') }}">Terug naar Zakelijk</a>
    </nav>

    <h1>Reparatieverzoeken</h1>

    @if($requests->isEmpty())
        <p>Er zijn momenteel geen verzoeken.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Beschrijving</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $request)
                    <tr>
                        <td>{{ $request->name }}</td>
                        <td>{{ $request->email }}</td>
                        <td>{{ $request->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>
