<?php

namespace CAdministrador;;

class usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "ngp";
        $this->email = "ngp@gmail.com";
    }
}