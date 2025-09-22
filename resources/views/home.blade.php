<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
   
            @vite(['resources/css/style.css', 'resources/js/app.js'])
       
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ Vite::asset('resources/img/Logo.png') }}">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Массивы</a></li>
            </ul>
        </div>
    </header>
    <footer>
        <div class="container">

        </div>
    </footer>
</body>
</html>