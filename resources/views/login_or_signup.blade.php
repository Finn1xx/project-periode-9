<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
@extends('nav')


    <div class="container login_or_sign_container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <div>
                    @guest
                    <div class="col-12 d-flex justify-content-center align-items-center flex-column">

                        <h1 class="mb-5">Het lijkt erop dat jij niet ingelogd bent</h1>
                        <a href="{{ route('login') }}"><button>Log In</button></a>
                        <button onclick="window.location.href='{{ route('register') }}'">Sign Up</button>
                    </div>
                    @endguest
        
                    @auth
                        <h1>Welkom, {{ Auth::user()->name }}</h1>
                        <form class="d-flex justify-content-center align-items-center" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Log Uit</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    @extends('footer')

</body>
</html>
