<?php
require_once 'config/database.php';

class modelBase{
    public $db;

    public function __construct()
    {
        $this->db = database::conectar();
    }
    public function conseguirDatos($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        // var_dump($query);
        return $query;
    }

}