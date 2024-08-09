<?php

class Category{
    private $id_cat;
    private $nombre;
    // conexion a la base de datos
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
    function getId(){
        return $this->id_cat;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setId($id_cat){
        $this->id_cat = $id_cat;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getAll(){
        $category = $this->db->query("SELECT * FROM categoria;");
        return $category;
    }

}