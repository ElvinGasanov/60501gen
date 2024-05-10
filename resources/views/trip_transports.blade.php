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
<h2>{{ $trip_trucks ? "Список грузовиков на рейсе ". $trip->id : "Список грузов пуст" }}</h2>
@if($trip_trucks)
    <table>
        <thead>
        <tr>
            <th>Дата отправки</th>
            <th>ID рейса</th>
            <th>ID грузовика</th>
            <th>Грузовик</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trip_trucks as $truck)
            <tr>
                <td>
                    {{ $truck->trip->start_date}}
                </td>
                <td>
                    {{ $trip->id }}
                </td>
                <td>
                    {{ $truck->id }}
                </td>
                <td>
                    {{ $truck->name }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
</body>
</html>
