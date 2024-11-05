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
        <img src="Photos/cropped-logo%20UNEED-IT.png">
    </div>
    <div id="logoptions">
        <ul>
        <li class="redc"><a href="{{ url('/') }}">Home</a></li> <!-- Aangepast -->
            <li class="bluec"><a href="{{ url('/over-ons') }}">Over ons</a></li>
            <li class="redc"><a href="{{ url('/service') }}">Service</a></li> <!-- Aangepast -->
            <li class="bluec"><a href="{{ url('/zakelijk') }}">Zakelijk</a></li> <!-- Aangepast -->
            <li class="redc"><a href="{{ url('/faq') }}">Faq</a></li> <!-- Aangepast -->
            <li class="bluec"><a href="{{ url('/Bezorgdiensten') }}">Bezorgdiensten</a></li> <!-- Aangepast -->
            <li class="redc"><a href="{{ url('/login_or_signup') }}">Account</a></li> <!-- Aangepast -->
        </ul>
    </div>
</nav>
<main class="main-content">
    <div class="form-container">
        <h1 class="form-title">Registration</h1>
        <form id="registration-form" action="check.php" method="post">
            <label for="naam">Name:</label>
            <input type="text" name="naam" id="naam" placeholder="Name" required><br>
            <label for="telefoonnummer">Phone:</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer" placeholder="Phone Number" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Address" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <button type="submit">Register</button>
        </form>
    </div>
</main>
</body>
</html>
