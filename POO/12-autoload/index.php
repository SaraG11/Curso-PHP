<?php

use MisClases\usuario, MisClases\categoria, CAdministrador\usuario as UsuarioAdmin;

require_once 'autoload.php';


// $usuario = new usuario();
// echo $usuario->nombre;
// echo '<br>';
// echo $usuario->email;

// ESPACIOS DE NOMBRES Y PAQUETES

class principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function  __construct(){
        $this->usuario = new usuario();
        $this->categoria = new categoria();

    }

    function informacion(){
        // echo __CLASS__;
        echo __METHOD__;
    }

}
// Objeto principal

$principal = new principal();
$principal->informacion();
// var_dump($principal->categoria);
// var_dump(get_class_methods($principal));

// constantes para clases


/* objeto de otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario); */

/* comprobar si existe una clase
$clase = class_exists('MisClases\usuario');
if($clase){
    echo "<h3> La clase si existe</h3>";
}else{
    echo "<h3> La clase NO existe</h3>";
}
*/
