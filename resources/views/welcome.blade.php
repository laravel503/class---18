<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laravel View</h1>
    <h1>Name : {{ $name }}</h1>
    <h1>Name1 : {{ $name1 }}</h1>
    @foreach($man as $key => $value)
        <h1>{{$key}} : {{ $value }}</h1>
    @endforeach
    
</body>
</html>