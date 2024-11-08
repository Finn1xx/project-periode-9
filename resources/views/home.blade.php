<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa1gb8zM6CpNp8Qw7KqKoZ3txgGX7rGqO9foU7ELpBBvn8DBtDQJ6MDwGH7" crossorigin="anonymous">

</head>

@extends('nav')
<body id="body_main">
    <main id="mainhome">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="hometext">
                        <img src="{{ asset('img/cropped-logo uneed-it(notext).png') }}" alt="Uneed-IT">
                        <p><span class="white-text">Voor al uw reparaties kunt u terecht bij </span><span class="red-text">Uneed-it</span></p>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body> 
@extends('footer')
</html>
 