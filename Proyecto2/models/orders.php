<?php
require_once 'config/db.php';

class Orders{
    private $id_ped; //es el id del pedido
    private $id_user; //es el id del usuario
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
    function getUser_id(){
        return $this->id_user;
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
    function setUser_id($id_user){
        $this->id_user = $id_user;
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
        $this->precio = $precio;
    }
    function setStatus($status){
        $this->status = $status;
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setHora($hora){
        $this->hora = $hora;
    }

    public function getAll(){
        $products = $this->db->query("SELECT * FROM pedidos ORDER BY id_ped DESC");
        return $products;
    }
    public function getOne(){
        $product = $this->db->query("SELECT * FROM pedidos WHERE id_ped = {$this->getIdPed()}");
        return $product->fetch_object();
    }
    public function getOneByUser(){
        $sql = "SELECT p.id_ped, p.precio FROM pedidos p"
            ." INNER JOIN linea_pedidos lp ON lp.id_ped = p.id_ped"
            ." WHERE p.id_user = {$this->getUser_id()} ORDER BY id_ped DESC LIMIT 1";
        // var_dump($sql);
        // die();
        $order = $this->db->query($sql);
        return $order->fetch_object();
    }
    public function getAllByUser(){
        $sql = "SELECT p.* FROM pedidos p"
            ." WHERE p.id_user = {$this->getUser_id()} ORDER BY id_ped DESC";
        // var_dump($sql);
        // die();
        $order = $this->db->query($sql);
        return $order;
    }
    public function getProductsByOrders($id_ped){
        // $sql = "SELECT * FROM productos WHERE id_prod IN "
        //     ." (SELECT id_prod FROM lineas_pedidos WHERE id_ped= {$id_ped})";
        $sql = "SELECT p.*, lp.unidades FROM productos p"
            ." INNER JOIN linea_pedidos lp ON p.id_prod = lp.id_prod"
            ." WHERE lp.id_ped= {$id_ped}";
            // var_dump($sql);
            // die();
        $products = $this->db->query($sql);
        return $products;
    }
    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL, {$this->getUser_id()}, '{$this->getPais()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getPrecio()}, 'confirm', CURDATE(), CURTIME());";
        // die();
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function save_line(){
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $order_id = $query->fetch_object()->pedido;

        foreach($_SESSION['carrito'] as $element) {
            $insert = "INSERT INTO linea_pedidos VALUES(NULL, {$order_id},{$element['id_prod']}, {$element['unidades']})";
            // var_dump($insert);
            // die();
            $save= $this->db->query($insert);

        }
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function updateOne(){
        $sql = "UPDATE pedidos SET status='{$this->getStatus()}'";
        $sql .= " WHERE id_ped={$this->getIdPed()};";
        // var_dump($sql);
        // die();
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
}