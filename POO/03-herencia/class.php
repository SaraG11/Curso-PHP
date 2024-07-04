<?php

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        
    }
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        
    }
    public function setAltura($altura) {
        $this->altura = $altura;
        
    }
    public function setEdad($edad) {
        $this->edad = $edad;
        
    }

    // acciones
    public function hablar(){
        return "Hablando";
        
    }
    public function caminar(){
        return "Caminando";
        
    }

}

class Informatico extends Persona{

    public $lenguajes;
    public $experiencia;

    public function __construct()
    {
        $this->lenguajes = "HTML, CSS, JS";
        $this->experiencia = 10;
    }

    public function tipoLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    public function programar(){
        return "Programador";
        
    }
    public function repararOrdenaro(){
        return "Reparando";
    }
    public function hacerOfimatica(){
        return "Escribiendo Word";
    }
}

class Designer extends Informatico{
    public $diseño;
    public $experienciaDiseño;

    public function __construct()
    {
        parent::__construct();
        $this->diseño = 'UX';
        $this->experienciaDiseño = 1;
    }

    public function prototipo(){
        return "Diseñando una pagina";
    }
}