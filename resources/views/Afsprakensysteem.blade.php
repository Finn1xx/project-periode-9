<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afspraken</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @extends('nav')
    <main >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h1>Afspraken</h1>
                        
                        @if (session('success'))
                        <p>{{ session('success') }}</p>
                        @endif
            
                        <ul>
                            @forelse ($appointments as $appointment)
                            <li>
                                <p href="{{ route('appointments.show', $appointment) }}">
                                    {{ $appointment->name }} - {{ $appointment->appointment_date }}
                                </p>
                                <a href="{{ route('appointments.edit', $appointment) }}"><button>Bewerken</button></a>
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
                        
                        <div class="col-12 pt-5">

                            <a href="{{ route('appointments.create') }}"><button>Nieuwe afspraak maken</button></a>
                        </div>
                </div>
            </div>
        </div>
    </main>
    @extends('footer')

</body>
</html>
