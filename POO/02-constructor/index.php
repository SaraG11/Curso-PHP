<?php

require_once 'coche.php';

$coche = new Coche("Negro", "Renaut", "clio", 150, 5);


// variable publica
$coche->color = "Negro";
var_dump($coche);

// variable protected - no se puede acceder, es una propiedad desde fuera de la clase 
$coche->setMarca("Audi");

// obtener el modelo variable privada
var_dump($coche->getModelo());
