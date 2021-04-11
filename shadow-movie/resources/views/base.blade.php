<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="" style="text-align: center;">

                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('movie.index') }}">Movies</a>
                <a href="{{ route('category.index') }}">Category</a>
                
        </div>
    </header>

    <hr>
    <div class="" style="text-align: center;">
        @yield('content')
    </div>
    <hr>

    <footer>
        <div class="" style="text-align: center;">
            @if(true)
                &copy; Copyright {{ date('Y') }} &middot;
            @endif
        </div>
    </footer>
</body>
</html>
