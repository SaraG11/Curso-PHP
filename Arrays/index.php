<?php

// definicion de array
$peliculas = array('Batman', 'Spirdeman', 'HP');
$cantantes = ['Drake', 'Billi', 'Coldplay'];
$personas = array (
    'nombre' => 'Sara',
    'apellido' => 'Gonzalez',
    'web' => 'sg.com'
);
// array asociativos 
// var_dump($personas['nombre']);
echo ($personas['nombre']);
echo '<br>';
//sacar indicies del array 
echo $peliculas[0];
echo '<br>';
echo $cantantes[2];

//recorrer con for mostrar listado de un array

echo '<h3> Listado de peliculas </h3>';
echo '<ul>';
for($i = 0; $i < count($peliculas); $i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

// foreach 
echo '<h3> Listado de cantantes </h3>';
echo '<ul>';
foreach($cantantes as $cantante){
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

// array multidimensionales

$contactos = array (
    array (
        'nombre' => 'Sara',
        'email' => 'sngp@gmail.com'
    ),
    array (
        'nombre' => 'Luis',
        'email' => 'lsp@gmail.com'
    ),
    array (
        'nombre' => 'Juan',
        'email' => 'jgr@gmail.com'
    ),

);

// acceder a un array multidimensional
// var_dump($contactos);
// echo $contactos[2]['email'];

// recorriendo el array
foreach ($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}
