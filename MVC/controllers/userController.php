<?php

class userController{

    public function mostrarUsuarios(){
        require_once 'models/user.php';

        $user = new user();

        $users = $user->conseguirDatos('usuarios');
        require_once 'views/users/mostrar.php';
        
    }
    public function crearUsuarios(){
        require_once 'views/users/new.php';

    }
}