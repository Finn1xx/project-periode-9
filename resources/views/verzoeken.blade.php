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

                    // Knop voor offertes
                    const offertesBtn = document.getElementById("offertesBtn");
                    if (data.role === 'admin') {
                        console.log("Admin user - knop wordt zichtbaar");
                        offertesBtn.style.display = "block"; 
                    } else {
                        console.log("Regular or guest user - knop wordt verborgen");
                        offertesBtn.style.display = "none"; 
                    }
                })
                .catch(error => console.error('Error fetching user role:', error));
        }

        function viewRequests() {
            window.location.href = "/verzoeken"; 
        }

        function navigateToRepairRequest() {
            window.location.href = "/reparatieverzoek"; 
        }
    </script>
</head>

<body>
@extends('nav')

<main id="mainZakelijk">
    <div class="block-text">
        <h1>Welkom!</h1>
        <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
        <div class="buttons">
            <button onclick="viewRequests()">Verzoeken bekijken</button>
            <button id="offertesBtn" style="display: none;" onclick="navigateToRepairRequest()">Offertes bekijken</button>
        </div>
    </div>
</main>
@extends('footer')

<script>
    document.addEventListener('DOMContentLoaded', checkUserRole);
</script>
</body>
</html>
