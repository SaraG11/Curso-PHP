<?php

class Usuario{
    const URL_COMPLETA = "https://localhost";
    public $email;
    public $password;

    function getEmail(){
        return $this->email;

    }
    function getPassword(){
        return $this->password;
    }

    function setEmail($email){
        $this->email = $email;
    }
    function setPassword($password){
        $this->password = $password;
    }
}