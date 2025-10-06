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
        <h1>Редактирование продукта</h1>
    </header>
    <main>
        <div class="container">
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" value="{{ $product -> name }}"><br>
                <input type="text" name="price" value="{{ $product -> price }}"><br>
                <textarea name="description" placeholder="Описание товара">{{$product->description}}</textarea><br>
                <input type="submit" value="Обновить товар">
            </form>
        </div>
    </main>

</body>
</html>