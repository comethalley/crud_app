

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twice</title>
</head>
<body>

    <ul>
        @foreach ($twice as $twice)
            <li>{{ $twice->gender}} {{ $twice->gender_count}}</li>
        @endforeach 
    </ul>
</body>
</html>