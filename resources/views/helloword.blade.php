<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao mondo</h1>
    <h2>da...</h2>
    <h3>
        @foreach ($user as $data)
            {{$data}}
        @endforeach
    </h3>
</body>
</html>