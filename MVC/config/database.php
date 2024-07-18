<?php

// conexion a base de datos

class database{
    public static function conectar(){
        $connection = new mysqli("localhost", "root", "", "notas_master");
        $connection->query("SET NAMES 'utf8'");

        return $connection;
    }
}