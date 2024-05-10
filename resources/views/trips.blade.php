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
<h2>Расписание рейсов</h2>
<table border="1">
    <thead>
    <td>id рейса</td>
    <td>Дата</td>
    <td>Время</td>
    </thead>
    @foreach($trips as $trip)
        <tr>
            <td>{{$trip->id}}</td>
            <td>{{$trip->start_date}}</td>
            <td>{{$trip->start_time}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


