<?php

// Programacion orientada a objetos (POO)
class Coche{
    public $color = "rojo", $marca = "ferrari", $modelo = "aventador", $velocidad = 300, $plazas = 2;

    // métodos, son acciones que hace el objeto (antes funciones)
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
} //fin definicion de la clase

// crear un objeto o instanciar una clase
// $coche = new Coche();
// var_dump($coche);

// usando métodos
echo $coche->getVelocidad();

$coche->setColor("amarillo");
echo "El color del coche es:".$coche->getColor()."<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

$coche->frenar();

echo "velocidad del coche:".$coche->getVelocidad();

// $coche2 = new Coche();
$coche2->setColor("Azul");

var_dump($coche2);