<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nieuw Reparatieverzoek</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @extends('nav')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Dien een reparatieverzoeken/offertes in</h1>
            </div>
            <div class="col-6">
                <form action="{{ route('repair.request.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="title">Titel:</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    
                    <div>
                        <label for="description">Beschrijving:</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>
            
                    <div>
                        <label for="name">Naam:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
            
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>            
                    <button type="submit">Verzend Verzoek</button>
                </form>
            </div>
        </div>
    </div>
    @extends('footer')

</body>

</html>
