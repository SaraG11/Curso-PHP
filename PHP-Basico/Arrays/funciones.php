<?php

$cantantes = ['Drake', 'Billi', 'Coldplay', 'Alison'];
$num = [1,2,7,10,45,8];

//ordener un array alfabeticamente 
asort($cantantes);
var_dump($cantantes);

//ordena un array inverso
arsort($cantantes);
var_dump($cantantes);

//ordena numeros 
sort($num);
var_dump($num);

//añadir elementos en un array 
$cantantes[] = 'Arctic';
var_dump($cantantes);

// array push 
array_push($cantantes, 'Tame Impala');
var_dump($cantantes);

//eliminar el ultimo indice de un array
array_pop($cantantes);
var_dump($cantantes);

// indice en concreto
unset($cantantes[3]);
var_dump($cantantes);

// sacar un aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// dar la vuelta 
//var_dump(array_reverse($num));
echo '<br>';
// huscar dentro de un array 
$result = array_search('Coldplay', $cantantes);
var_dump($result);

//contar num de elementos
echo count($cantantes);
echo '<br>';
echo sizeof($cantantes);