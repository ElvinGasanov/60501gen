<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Грузы</title>
</head>
<body>
<h2>Список грузов</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Вес</td>
    <td>Заказчик</td>
    </thead>
    @foreach($cargoes as $cargo)
        <tr>
            <td>{{$cargo->id}}</td>
            <td>{{$cargo->weight}}</td>
            <td>{{$cargo->sender}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


