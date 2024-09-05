<?php use App\Http\Controllers\MoviesController;?>

<center><h1>{{$title}}</h1></center>
<center><p>(Accion index del controlador MoviesController)</p></center>

@if (isset($page))
    <h3>La página es: {{$page}}</h3>
@endif

<a href="{{action([MoviesController::class, 'detail'])}}">Ir Detalle</a>