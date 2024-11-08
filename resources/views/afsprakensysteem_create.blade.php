<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afspraken</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

@extends(view: 'nav')
    <h2>Nieuwe Afspraak</h2>

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div>
            <label>Naam:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>E-mail:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Datum en tijd:</label>
            <input type="datetime-local" name="appointment_date" required>
        </div>
        <div>
            <label>Opmerkingen:</label>
            <textarea name="notes"></textarea>
        </div>
        <button type="submit">Opslaan</button>
    </form>
    @extends(view: 'footer')
