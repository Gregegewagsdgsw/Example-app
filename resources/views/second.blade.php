<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Здравствуйте</h1>
    <p>{{ $name }}</p>
    <p>{{$arr['name']}}</p>
    <p>{{$arr['mark']}}</p>
    @foreach($arr as $item)
        <p>{{ $item }}</p>
    @endforeach
</body>
</html>