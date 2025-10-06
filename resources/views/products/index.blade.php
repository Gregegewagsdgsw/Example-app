<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Каталог товаров</h1>
    </header>
    <main>
        <a href="{{route('products.create')}}">Создание товара</a>
        <div class="container">
            @foreach($products as $product)
                <div class="card">
                    <h2>
                        <a href="">{{ $product->name }}</a>
                    </h2>
                    <p>{{ $product->price }}</p>
                    <p>{{ $product->description }}</p>
                    <form method="POST" action="{{ route('products.destroy', $product -> id) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить">
                    </form>
                    <a href="{{route('products.edit', $product->id)}}">Редактировать</a>
                    <hr>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>