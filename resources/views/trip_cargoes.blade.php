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
<h2>{{ $trip_cargo ? "Список грузов рейса ". $trip->id : "Список грузов пуст" }}</h2>
@if($trip_cargo)
<table>
    <thead>
    <tr>
        <th>Дата отправки</th>
        <th>ID груза</th>
        <th>Вес</th>
        <th>Получатель</th>
    </tr>
    </thead>
    <tbody>
    @foreach($trip_cargo as $cargo)
    <tr>
        <td>
            {{ $cargo->trip->start_date }}
        </td>
        <td>
            {{ $cargo->id }}
        </td>
        <td>
            {{ $cargo->weight }}
        </td>
        <td>
            {{ $cargo->sender }}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endif
</body>
</html>
