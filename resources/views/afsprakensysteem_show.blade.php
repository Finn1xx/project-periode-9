<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afspraken</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
@extends(view: 'nav')
<h2>Afspraak Details</h2>

    <p>Naam: {{ $appointment->name }}</p>
    <p>E-mail: {{ $appointment->email }}</p>
    <p>Datum en tijd: {{ $appointment->appointment_date }}</p>
    <p>Opmerkingen: {{ $appointment->notes }}</p>

    <a href="{{ route('appointments.edit', $appointment) }}">Bewerken</a>
    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Verwijderen</button>
    </form>
    <a href="{{ route('appointments.index') }}">Terug naar afsprakenlijst</a>
    @extends('footer')

