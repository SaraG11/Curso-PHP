<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "SG";
        $this->email = "sg@gmail.com";
        echo "Instancia del objeto creada <br>";
    }

    public function __toString()
    {
        return "Hola {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct()
    {
        echo "<br> destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;
// echo $usuario->email;

