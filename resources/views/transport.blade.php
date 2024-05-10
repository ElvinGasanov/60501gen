<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Грузовики</title>
</head>
<body>
<h2>Список грузовиков</h2>
<table border="1">
    <thead>
    <td>Название</td>
    <td>Грузоподъемность</td>
    </thead>
    @foreach($trucks as $truck)
        <tr>
            <td>{{$truck->name}}</td>
            <td>{{$truck->capacity}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


