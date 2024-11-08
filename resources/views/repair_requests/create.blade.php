<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nieuw Reparatieverzoek</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Verwijst naar de navigatiebalk -->
    @extends('nav')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Dien een Reparatieverzoek in</h1>
            </div>
            <div class="col-6">
                <form action="{{ route('repair.request.store') }}" method="POST">
                    @csrf
                    <!-- Veld voor titel (title) van het reparatieverzoek -->
                    <div>
                        <label for="title">Titel:</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    
                    <!-- Veld voor de beschrijving (description) van het probleem -->
                    <div>
                        <label for="description">Beschrijving:</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>
            
                    <!-- Veld voor naam van de gebruiker -->
                    <div>
                        <label for="name">Naam:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
            
                    <!-- Veld voor email van de gebruiker -->
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
            
                    <!-- Standaard de status is pending, deze hoeft niet in het formulier te komen -->
            
                    <button type="submit">Verzend Verzoek</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Verwijst naar de footer -->
    @extends('footer')

</body>

</html>
