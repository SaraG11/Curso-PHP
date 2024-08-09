<?php
require_once 'models/users.php';

class usersController{

    public function index(){
        echo "Controlador Uusarios, accion index";
    }

    public function registerUser(){
        require_once 'views/user/register.php';
    }
    public function saveUser(){
        if(isset($_POST)){
            // validr si los campos que reciben por POST existen 
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            
            $errores = array();
            
            // Validar nombre
            if (empty($nombre) || !preg_match("/^[a-zA-Z\s]+$/", $nombre)) {
                $errores['nombre'] = 'El nombre no es válido. Debe contener solo letras y no estar vacío.';
            }

            // Validar apellidos
            if (empty($apellidos) || !preg_match("/^[a-zA-Z\s]+$/", $apellidos)) {
                $errores['apellidos'] = 'Los apellidos no son válidos. Deben contener solo letras y no estar vacíos.';
            }

            // Validar email
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = 'El email no es válido. Debe tener un formato correcto y no estar vacío.';
            }

            // Validar contraseña
            if (empty($password) || strlen($password) < 8 || !preg_match("/[0-9]/", $password) || !preg_match("/[A-Z]/", $password)) {
                $errores['password'] = 'La contraseña no es válida. Debe tener al menos 8 caracteres, incluir al menos un número y una letra mayúscula.';
            }

            $save = false;
            var_dump($errores);
            // var_dump($save);
            // die();

            if (count($errores) == 0) {
                $users = new Users();
                $users->setNombre($nombre);
                $users->setApellidos($apellidos);
                $users->setEmail($email);
                $users->setPassword($password);
    
                $save = $users->save();
                if ($save) {
                    $_SESSION['register'] = 'complete';
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['errores'] = $errores;
                // $_SESSION['data'] = $_POST;
                $_SESSION['register'] = 'failed';
            }
        } else {
            $_SESSION['register'] = 'failed';
        }
        header("Location:".base_url.'?controller=users&action=registerUser');
        // echo 'El campo incorrecto';
    }

    // login
    public function loginUser(){
        if(isset($_POST)){
            // identificar al usuario
            // consulta a la base de datos 
            $user = new Users();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);

            $identity= $user->login();

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;

                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
                require_once 'views/layout/home.php';
            }else{
                // crear una sesion
                $_SESSION['error_login'] = 'Identificacion fallida';
                header("Location:".base_url);
                // echo 'fallo';
            }
        }
    }
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        header("Location:".base_url);
    }
}