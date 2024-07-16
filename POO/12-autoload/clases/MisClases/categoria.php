<?php
namespace MisClases;

class categoria{
    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = "Accion";
        $this->descripcion = "pelicula de accion";
    }
}