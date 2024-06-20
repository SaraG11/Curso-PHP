<?php

$error = "faltan_datos";



if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) &&
        !empty($_POST['email']) && !empty($_POST['pass']) ){

    $error = 'ok';
 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];  

    // validar el nombre
    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'nombre';
        
    }
    if(!is_string($apellido) || preg_match("/[0-9]/", $apellido)){
        $error = 'apellido';
        
    }
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
        
    }
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
        
    }
    if(empty($pass) || strlen($pass) < 5){
        $error = 'pass';
        
    }

    /*var_dump($_POST);
    var_dump($error);
    die();*/

} else{
    $error = "faltan_datos";
}
if($error != 'ok'){
    header("Location:index.php?error=$error");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion Formulario</title>
</head>
<body>
    <?php
    if($error =='ok'): ?>
    <h3>Datos validados</h3>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
    <?php endif; ?>
</body>
</html>