<head>
    <meta charset="UTF-8">
    <title>Verzoeken Overzicht</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
@extends('nav')

<main>
    <div>
        <h1>Verzoeken Overzicht</h1>
    </div>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    @if($verzoeken->isEmpty())
        <p>Er zijn geen verzoeken om weer te geven.</p>
    @else
        <div class="table-container">
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
        </div>
    @endif

    <!-- Knop om terug te gaan naar de zakelijk pagina -->
    <div class="back-button">
        <a href="{{ url('/zakelijk') }}" class="btn btn-primary">Terug naar Zakelijk</a>
    </div>
    

</main>

@extends('footer')

</body>
