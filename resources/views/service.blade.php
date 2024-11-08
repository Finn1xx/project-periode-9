<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav id="navbar">
    <div id="logonav">
    <img src="{{ asset(path: 'img/cropped-logo UNEED-IT.png') }}" alt="Uneed-IT Logo">
    </div>
    <div id="logoptions">
    <ul>
                <li class="redc"><a href="{{ url('/') }}">Home</a></li>
                <li class="bluec"><a href="{{ url('/over-ons') }}">Over ons</a></li>
                <li class="redc"><a href="{{ url('/service') }}">Service</a></li>
                <li class="bluec"><a href="{{ url('/zakelijk') }}">Zakelijk</a></li>
                <li class="redc"><a href="{{ url('/faq') }}">Faq</a></li>
                <li class="bluec"><a href="{{ url('/Bezorgdiensten') }}">Bezorgdiensten</a></li>
                <li class="redc"><a href="{{ url('/login_or_signup') }}">Account</a></li>
                <li class="bluec"><a href="{{ url('/afspraken') }}">Afspraken Systeem</a></li> <!-- Nieuwe link toegevoegd -->
            </ul>
    </div>
</nav>
<main>
    <div class="Onze-Service">
        <h1 class="cred">ONZE <span class="Service-Color">SERVICE</span></h1>
    </div>
    <div class="Lorem">
        <p class="Lorem-Text">Dit zijn alle diensten die wij leveren.</p>
    </div>
    <div class="Service-Align">
        <div class="Graphic-Design">
            <img src="" alt="">
            <h1 class="Service-Text">Graphic Design</h1>
            <p class="Service-Paragraaf">Ons bedrijf biedt grafisch ontwerp diensten aan, zoals logo's, branding, webdesign, printmaterialen en visuele content.</p>
        </div>
        <div class="Graphic-Design1">
            <img src="" alt="">
            <h1 class="Service-Text2">Software Development</h1>
            <p class="Service-Paragraaf">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit dignissimos, facere consectetur, ipsam delectus voluptatibus reiciendis quas, </p>
        </div>
        <div class="Graphic-Design">
            <img src="" alt="">
            <h1 class="Service-Text">Product Design</h1>
            <p class="Service-Paragraaf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis nihil provident ipsa ut optio sunt tenetur vitae excepturi consequuntur est, </p>
        </div>
    </div>
    <div class="Service-Align2">
        <div class="Graphic-Design1">
            <img src="" alt="">
            <h1 class="Service-Text2">Blog Writing</h1>
            <p class="Service-Paragraaf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, dolorum dolore, </p>
        </div>
        <div class="Graphic-Design">
            <img src="" alt="">
            <h1 class="Service-Text">Social Marketing</h1>
            <p class="Service-Paragraaf">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ab quo tempore? </p>
        </div>
        <div class="Graphic-Design1">
            <img src="" alt="">
            <h1 class="Service-Text2">IT Services</h1>
            <p class="Service-Paragraaf">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, accusantium? </p>
        </div>
    </div>
</main>
</body>
</html>