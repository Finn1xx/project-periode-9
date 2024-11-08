<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afspraken</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa1gb8zM6CpNp8Qw7KqKoZ3txgGX7rGqO9foU7ELpBBvn8DBtDQJ6MDwGH7" crossorigin="anonymous">
</head>

<body  >
    @include('nav')

    <main class="container show_container my-5">
        <div class="row ">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column">

                <h2 class="mb-4">Afspraak Details</h2>
        
                <div class="mb-3">
                    <strong>Naam:</strong> <span>{{ $appointment->name }}</span>
                </div>
                <div class="mb-3">
                    <strong>E-mail:</strong> <span>{{ $appointment->email }}</span>
                </div>
                <div class="mb-3">
                    <strong>Datum en tijd:</strong> <span>{{ $appointment->appointment_date }}</span>
                </div>
                <div class="mb-3">
                    <strong>Opmerkingen:</strong> <span>{{ $appointment->notes }}</span>
                </div>
        
                <div class="d-flex gap-3">
                    <a href="{{ route('appointments.edit', $appointment) }}" class="btn"><button>Bewerken</button></a>
                    
                    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" onsubmit="return confirm('Weet u zeker dat u deze afspraak wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Verwijderen</button>
                    </form>
        
                    <a href="{{ route('appointments.index') }}" class="btn"><button>Terug naar afsprakenlijst</button></a>
            </div>
            

            </div>
        </div>
    </main>

    @include('footer')
</body>
</html>
