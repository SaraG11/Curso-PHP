<?php

// iniciar sesion
session_start();
// cariable local
$variable_normal = 'Soy una cadena de texto';
// variable de session
$_SESSION['variable_persistente'] = 'Hola soy una sesion activa';

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];
