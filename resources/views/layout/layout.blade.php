<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} :: @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="logo">
        <img src="{{ asset('img/icons8-elephant-30.png')}}" alt="" style="background-color: rgba(0, 110, 255, 0.685);">
        <h1 style="display: inline">Crud - Laravel</h1>
    </div>


    <div class="container">
        @yield('conteudo')
    </div>


    <footer>
        <p>Feito por Miguel Márcio</p>
    </footer>
</body>
</html>
