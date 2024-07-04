<?php

// Programacion orientada a objetos (POO)
class Coche{
    public $color, $velocidad, $plazas;
    protected $marca;
    private $modelo;

    public function __construct($color, $marca, $modelo, $velocidad, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->plazas = $plazas;
    }

    // métodos, son acciones que hace el objeto (antes funciones)
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // propiedad para poder modificar la variable de protected
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    // propiedad para poder conseguir un valor con variable privada 
    public function getModelo() {
        return $this->modelo;
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