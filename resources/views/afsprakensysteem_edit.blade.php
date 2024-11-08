@extends('layouts.app')

@section('content')
    <h2>Afspraak Bewerken</h2>

    <form action="{{ route('appointments.update', $appointment) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Naam:</label>
            <input type="text" name="name" value="{{ old('name', $appointment->name) }}" required>
        </div>
        <div>
            <label>E-mail:</label>
            <input type="email" name="email" value="{{ old('email', $appointment->email) }}" required>
        </div>
        <div>
            <label>Datum en tijd:</label>
            <input 
                type="datetime-local" 
                name="appointment_date" 
                value="{{ old('appointment_date', $appointment->appointment_date ? $appointment->appointment_date->format('Y-m-d\TH:i') : '') }}" 
                required
            >
        </div>
        <div>
            <label>Opmerkingen:</label>
            <textarea name="notes">{{ old('notes', $appointment->notes) }}</textarea>
        </div>
        <button type="submit">Opslaan</button>
    </form>
@endsection
