<?php

namespace MisClases;

class usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "sg";
        $this->email = "sg@gmail.com";
    }
}