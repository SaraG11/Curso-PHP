<?php
require_once 'autoload.php';
// require_once 'usuario.php';
// require_once 'categoria.php';
//  require_once './clases';



$usuario = new User();
echo $usuario->nombre;
echo '<br>';
echo $usuario->email;