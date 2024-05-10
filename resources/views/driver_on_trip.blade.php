<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Водители в рейсе</title>
</head>
<body>

<h2>Водители на рейсе {{ $trip->id }}</h2>


    <table border="1">
        <thead>
        <tr>
            <th>Грузовик</th>
            <th>Водитель</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $trip->transport->name }}</td>
            <td>{{ $driverOnTrip->name }}</td>
        </tr>
        </tbody>
    </table>
</body>
</html>
