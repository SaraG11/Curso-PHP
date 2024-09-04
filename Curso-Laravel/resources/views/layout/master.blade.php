<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo - @yield('title')</title>
</head>
<body>
    @section('header')
        <center><h2>Header de la Web (master)</h2></center>
    @show
    <hr>
    <div class="container">
        @yield('content')
    </div>
    <hr>
    @section('footer')
        <center><h2>Footer de la web (master)</h2></center>
    @show
</body>
</html>