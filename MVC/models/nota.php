<?php
require_once 'modelBase.php';

class nota extends modelBase{
    public $idUser;
    public $titulo;
    public $descripcion;

    public function __construct()
    {
        parent::__construct();
    }
    function getIdUser(){
        return $this->idUser;
    }
    function getTitulo(){
        return $this->titulo;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function setIdUser($idUser){
        $this->idUser = $idUser;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    
    public function guardarNota(){
        $sql = "INSERT INTO notas(idUser, titulo, descripcion, fecha) 
                VALUES('{$this->idUser}', '{$this->titulo}', '{$this->descripcion}', CURDATE())";
        $guardar = $this->db->query($sql);
        return $guardar;
    }

}

