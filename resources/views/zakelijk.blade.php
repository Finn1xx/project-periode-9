<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zakelijk</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <script>
        window.onload = function() {
            checkUserRole(); 
        };

        function checkUserRole() {
            fetch('/checkUserRole') 
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Netwerkresponse was niet ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('User role:', data.role); 
                    const verzoekenBtn = document.getElementById("verzoekenBtn");
                    if (!verzoekenBtn) {
                        console.error("verzoekenBtn is niet gevonden in de DOM.");
                        return; 
                    }

                    if (data.role === 'admin') {
                        console.log("Admin user - knop wordt zichtbaar");
                        verzoekenBtn.style.display = "block"; 
                    } else {
                        console.log("Regular or guest user - knop wordt verborgen");
                        verzoekenBtn.style.display = "none"; 
                    }
                })
                .catch(error => console.error('Error fetching user role:', error));
        }

        function navigateToRepairRequest() {
            window.location.href = "/reparatieverzoek"; 
        }

        function viewRequests() {
            window.location.href = "/verzoeken"; 
        }
    </script>
</head>

<body>
@extends('nav')

<main>
    <div class="container zakelijkContainer">
        <div class="row">
            <div class="col-12 zakelijkCol">
                <div class="col-12 pb-5 d-flex justify-content-center align-items-center flex-column">
                    <h1>Welkom!</h1>
                    <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
                </div>
                <div class="col-12">
                    <div class="buttons">
                        <button onclick="navigateToRepairRequest()">reparatieverzoeken/offertes aanvragen</button>
                        <button onclick="viewRequests()" id="verzoekenBtn">Verzoeken bekijken</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@extends('footer')
<script>
    document.addEventListener('DOMContentLoaded', checkUserRole);
</script>
</body>
</html>
