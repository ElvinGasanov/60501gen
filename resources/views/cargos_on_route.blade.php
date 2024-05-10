<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Грузы по маршруту</title>
</head>
<body>
<h2>Маршрут для груза {{ $cargo->id }}</h2>
<table border="1">
    <thead>
    <tr>
        <th>Маршрут</th>
        <th>Вес</th>
        <th>Стоимость за км</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $cargoRoute->cities }}</td>
            <td>{{ $cargo->weight }}</td>
            <td>{{ $cargoRoute->rate }}</td>
        </tr>
    </tbody>
</table>
</body>
</html>
