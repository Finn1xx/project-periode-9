<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nieuw Reparatieverzoek</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @extends('nav')
    <div class="container create_container">
        <div class="row">
            <div class="col-11">
                <div class="col-12">
                    <h1 class="pb-5">Dien een reparatieverzoeken/offertes in</h1>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
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
                            <input  type="email" id="email" name="email" required>
                        </div>
                        <div class="mt-4 d-flex justify-content-center">

                            <button type="submit">Verzend Verzoek</button>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
    @extends('footer')

</body>

</html>
