<?php
session_start(); // Start de sessie om toegang te krijgen tot gebruikersgegevens

// Hier zou je de logica moeten hebben om de gebruikersrol te verkrijgen.
// Aangenomen dat je een 'role' sessievariabele hebt die de rol van de gebruiker bevat
if (isset($_SESSION['user_role'])) {
    echo $_SESSION['user_role']; // Geef de rol van de gebruiker terug
} else {
    echo 'guest'; // Als de gebruiker niet is ingelogd, retourneer 'guest'
}
