<?php

class usersController{
    public function index(){
        echo "Controlador Uusarios, accion index";
    }

    public function registerUser(){
        require_once 'views/user/register.php';
    }
    public function saveUser(){
        echo "Controlador Uusarios, accion index";
    }
}