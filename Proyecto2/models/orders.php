<?php
require_once 'config/db.php';

class Orders{
    private $id_ped; //es el id del pedido
    private $id; //es el id del usuario
    private $pais;
    private $localidad;
    private $direccion;
    private $precio;
    private $status;
    private $fecha;
    private $hora;

    // conexion a la base de datos
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    function getIdPed(){
        return $this->id_ped;
    }
    function getId(){
        return $this->id;
    }
    function getPais(){
        return $this->pais;
    }
    function getLocalidad(){
        return $this->localidad;
    }
    function getDireccion(){
        return $this->direccion;
    }
    function getPrecio(){
        return $this->precio;
    }
    function getStatus(){
        return $this->status;
    }
    function getOFecha(){
        return $this->fecha;
    }
    function getHora(){
        return $this->hora;
    }

    function setIdPed($id_ped){
        $this->id_ped = $id_ped;
    }
    function setId($id){
        $this->id = $id;
    }
    function setPais($pais){
        $this->pais = $this->db->real_escape_string($pais);
    }
    function setLocalidad($localidad){
        $this->localidad = $this->db->real_escape_string($localidad);
    }
    function setDireccion($direccion){
        $this->direccion = $this->db->real_escape_string($direccion);
    }
    function setPrecio($precio){
        $this->precio = $this->db->real_escape_string($precio);
    }
    function setStatus($status){
        $this->status = $this->db->real_escape_string($status);
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setHora($hora){
        $this->hora = $hora;
    }

    public function getAll(){
        $products = $this->db->query("SELECT * FROM pedidos ORDER BY id_prod DESC");
        return $products;
    }
    public function getOne(){
        $product = $this->db->query("SELECT * FROM pedidos WHERE id_prod = {$this->getId()}");
        return $product->fetch_object();
    }
    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL,'{$this->getId()}', '{$this->getPais()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getPrecio()}, 'confirm', CURDATE(), CURTIME());";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
}