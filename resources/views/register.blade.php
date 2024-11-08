<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
@extends('nav')


    <div class="container">
        <h1>Maak een account aan</h1>

        <!-- Weergeven van foutmeldingen -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div>
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Bevestig Wachtwoord:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div>
                <label for="role">Kies een rol:</label>
                <select id="role" name="role" required>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            <div>
                <button type="submit">Registreer</button>
            </div>
        </form>
    </div>
    @extends('footer')

</body>
</html>
