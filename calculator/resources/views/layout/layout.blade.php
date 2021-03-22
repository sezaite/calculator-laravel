<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkuliatorius</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">'
</head>
<body>
    <h1>Laba diena, sveiki atvykę pas Poną Kalkuliatorių!</h1>
    @yield('sudetis')
    @yield('atimtis')
    @yield('dalyba')
    @yield('daugyba')
    @yield('postCalc')
    @yield('kvadratu')
    <img src="/img/matrix.jpg" alt="matrica"/>
</body>
</html>