<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Создание продукта</h1>
    </header>
    <main>
        <div class="container">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название товара"><br>
                <input type="text" name="price" placeholder="Цена товара"><br>
                <textarea name="description" placeholder="Описание товара"></textarea><br>
                <input type="submit" value="Создать товар">
            </form>
        </div>
    </main>
</body>
</html>