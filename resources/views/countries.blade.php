<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Население</title>
</head>

<body>
    @foreach ($countries as $country)
        <div>
            <h2>{{ $country->name }}</h2>
            <ul>
                @foreach ($country->cities as $city)
                    <li>{{$city->name}} - {{$city->population}}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</body>

</html>
