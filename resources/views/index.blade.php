<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verzoeken Overzicht</title>
</head>
<body>
    <h1>Verzoeken Overzicht</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if($verzoeken->isEmpty())
        <p>Er zijn geen verzoeken om weer te geven.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Beschrijving</th>
                    <th>Status</th>
                    <th>Aangemaakt op</th>
                </tr>
            </thead>
            <tbody>
                @foreach($verzoeken as $verzoek)
                    <tr>
                        <td>{{ $verzoek->id }}</td>
                        <td>{{ $verzoek->title }}</td>
                        <td>{{ $verzoek->description }}</td>
                        <td>{{ $verzoek->status }}</td>
                        <td>{{ $verzoek->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
