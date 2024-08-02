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
            $users = new Users();
            $users->setNombre($_POST['nombre']);
            $users->setApellidos($_POST['apellidos']);
            $users->setEmail($_POST['email']);
            $users->setPassword($_POST['password']);
            // $save = $users
            var_dump($users);
        }
    }
}