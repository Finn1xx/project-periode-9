<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afspraken</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Navigatiebalk -->
    @extends('nav')


    <!-- Hoofdinhoud van de afsprakenpagina -->
    <main >
        <div>
            <h1>Afspraken</h1>
            <a href="{{ route('appointments.create') }}">Nieuwe afspraak maken</a>

            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif

            <ul>
                @forelse ($appointments as $appointment)
                    <li>
                        <a href="{{ route('appointments.show', $appointment) }}">
                            {{ $appointment->name }} - {{ $appointment->appointment_date }}
                        </a>
                        <a href="{{ route('appointments.edit', $appointment) }}">Bewerken</a>
                        <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </form>
                    </li>
                @empty
                    <li>Geen afspraken gevonden.</li>
                @endforelse
            </ul>
        </div>
    </main>

    <!-- Footer -->
    @extends('footer')

</body>
</html>
