<?php

// iniciar sesion 
require_once './includes/conection.php';


// recoger datos del formulario
if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // consulta para comprobar las credenciales del usuario

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $user = mysqli_fetch_assoc($login);
      
        // validar contraseña
        $verify = password_verify($password, $user['password']);
        if($verify){
            // utilizar una sesion para guardar los datos del usuarios logeado
            $_SESSION['usuario'] = $user;
            if(isset($_SESSION['error_login'])){
                unset($_SESSION['error_login']);
            }

        }else{
            // error de sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
        }

    }else{
        // mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";

    }

}


// consulta para comprobar las credenciales del usuario


header("Location: index.php");


// redirigir al index para que se recarge la pagina
