<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->name}}</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>{{$product->name}}</h1>
    <p>{{ $product->price }}</p>
    <p>{{ $product->description }}</p>
    <hr>
</body>
</html>