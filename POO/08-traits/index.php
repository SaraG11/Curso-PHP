<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h2> El nombre es".$this->nombre."</h2>";
    }
}
class Coche2{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellido;
}

class VideoJuego{
    public $nombre;
    public $anio;
}

$coche = new Coche2();
$persona = new Persona();
$videojuego = new VideoJuego();

$coche->nombre = "Ferrri";
$coche->mostrarNombre();
