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
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    public function getAll(){
        $category = $this->db->query("SELECT * FROM categoria ORDER BY id_cat DESC;");
        return $category;
    }
    public function save(){
        $sql = "INSERT INTO categoria VALUES(NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
        
    }

}