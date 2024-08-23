<?php
require_once 'config/db.php';

class Product{
    private $id_prod;
    private $id_cat;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    // conexion a la base de datos
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    function getId(){
        return $this->id_prod;
    }
    function getCategoria_id(){
        return $this->id_cat;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function getPrecio(){
        return $this->precio;
    }
    function getStock(){
        return $this->stock;
    }
    function getOferta(){
        return $this->oferta;
    }
    function getOFecha(){
        return $this->fecha;
    }
    function getImagen(){
        return $this->imagen;
    }

    function setId($id_prod){
        $this->id_prod = $id_prod;
    }
    function setCategoria_id($id_cat){
        $this->id_cat = $id_cat;
    }
    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    function setDescripcion($descripcion){
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }
    function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);
    }
    function setStock($stock){
        $this->stock = $this->db->real_escape_string($stock);
    }
    function setOferta($oferta){
        $this->oferta = $this->db->real_escape_string($oferta);
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getAll(){
        $products = $this->db->query("SELECT * FROM productos ORDER BY id_prod DESC");
        return $products;
    }
    public function getAllCategory(){
        $sql = "SELECT p.*, c.nombre AS 'nombrecat' FROM productos p"
                ." INNER JOIN categoria c ON c.id_cat = p.id_cat"
                ." WHERE p.id_cat = {$this->getCategoria_id()}"
                ." ORDER BY id_cat DESC";
        $products = $this->db->query($sql);
        // var_dump($sql); 
        return $products;
        
    }
    public function getOne(){
        $product = $this->db->query("SELECT * FROM productos WHERE id_prod = {$this->getId()}");
        return $product->fetch_object();
    }
    public function save(){
        $sql = "INSERT INTO productos VALUES(NULL,'{$this->getCategoria_id()}', '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function edit(){
        $sql = "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}";
        if($this->getImagen() != null){
            $sql .= ", imagen='{$this->getImagen()}'";
        }
        $sql .= " WHERE id_prod={$this->getId()};";
        // var_dump($sql);
        // die();
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function delete(){
        $sql = "DELETE FROM productos WHERE id_prod={$this->id_prod}";
        $delete = $this->db->query($sql);
        // var_dump($sql);
        // die();
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
    }
}