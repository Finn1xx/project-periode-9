<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Afspraken</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('nav')

    <main class="container bewerken_container my-5">
        <h2>Afspraak Bewerken</h2>

        <form action="{{ route('appointments.update', $appointment) }}" method="POST" class="mt-3">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Naam:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $appointment->name) }}" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $appointment->email) }}" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="appointment_date" class="form-label">Datum en tijd:</label>
                <input 
                    type="datetime-local" 
                    id="appointment_date" 
                    name="appointment_date" 
                    value="{{ old('appointment_date', $appointment->appointment_date ? $appointment->appointment_date->format('Y-m-d\TH:i') : '') }}" 
                    class="form-control" 
                    required
                >
            </div>
            
            <div class="mb-3">
                <label for="notes" class="form-label">Opmerkingen:</label>
                <textarea id="notes" name="notes" class="form-control">{{ old('notes', $appointment->notes) }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </main>
    @include('footer')
</body>

</html>
