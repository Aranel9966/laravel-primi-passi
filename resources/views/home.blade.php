<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset ('/css/style.css')}}"rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav">
            <ul>
                <li>
                    <h1>Home</h1>
                </li>
                @foreach($links as $link)
                <li>
                    <a href="/{{$link}}">{{$link}}</a> 
                </li>
                @endforeach
                {{-- <li>
                    <a href="/welcome"> hello</a>
                </li>
                <li>
                    <a href="/goodby"> good by</a>
                </li>
            </ul> --}}
        </nav>
    </header>
    
</body>
</html>