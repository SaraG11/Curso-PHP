<?php

if(isset($_POST)){
    require_once './includes/conection.php'; // conexion a la base de datos

    if(!isset($_SESSION)){
        session_start(); 
    }
    // recoger los valores del formulario de Registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false; //operador ternario 
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

    // array de errores

    $errores = array();
    // validar los datos antes de guardarlos antes de la base de datos

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){ //valida campo nombre
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = 'El nombre no es válido';
    }

    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){ //valida campo apellidos
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = 'Los apellidos no son válidos';
    }

    if(!empty($email) && !is_numeric($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){ //valida campo email
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = 'El email no es válido';
    }

    if(!empty($password)){ //valida campo password
        $pass_validado = true;
    }else{
        $pass_validado = false;
        $errores['password'] = 'La contraseña está vacía';
    }

    $guardar_usuario = false;
    if(count($errores) == 0){
        $guardar_usuario = true;
        // cifrar la contraseña
        $pass_seguro = password_hash($password, PASSWORD_BCRYPT, ['cost'=> 4]);

        // Insertar usuario en la tabla usuarios de bd
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$pass_seguro', CURDATE())";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['completado'] = "Registro exitoso";
        }else{
            $_SESSION['errores']['general'] = "Falló el registro";
        }

    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }

}
header('Location: index.php');


?>