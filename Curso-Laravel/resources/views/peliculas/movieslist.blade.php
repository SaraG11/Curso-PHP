@include('includes.header')
<!-- Imprimir por pantalla  -->
<h2>{{$title}}</h2>

<span>{{$list[0]}}</span>

<p>{{ date('Y') }}</p>


<!-- Comentarios -->
{{--Esto es un comentario en blade--}}


<!-- Mostrar si existe -->
{{-- <?= isset($director) ? $director : 'No hay director'; ?> --}}

{{ $director ?? 'No existe el director' }}

<!-- Condicionales -->
@if ($title && count($list) >= 2)
    <h3>El titulo existe y es: {{$title}} y el listado es mayor a 2</h3>
@elseif($title)
    <p>El titulo existe y el listado no es mayor a 5</p>
@else
    <span>La condición no se ha cumplido</span>
@endif

<!-- BUCLES -->
@for ($i = 0; $i < 20; $i++)
    el numero es: {{$i}} <br>
@endfor

@php
    $contador = 1;
@endphp
@while ($contador < 50)
@if ($contador % 2 == 0)
    Numero para: {{$contador}} <br>
@endif
   @php
      $contador++ 
   @endphp 
@endwhile

<hr>
@foreach ($list as $movie)
    <p>Movie {{$movie}}</p>
@endforeach

@include('includes.footer')