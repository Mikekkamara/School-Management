<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="welcomeContainer">

            <img src="{{ asset('./img/undraw_road_to_knowledge_m8s0.svg') }}"
            alt="">


            <p >
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Maxime soluta vitae dolorum facilis consequatur? Iure sed
                repudiandae tenetur nostrum nemo quam, debitis, eveniet ducimus
                vero rem, dicta accusantium voluptate. Nam.
            </p>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">home</a>
                @else
                    <a href="{{ route('login') }}">login</a>
                    <span> or </span>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">register</a>
                @endif
                @endauth
            @endif
    </div>
</body>
</html>

