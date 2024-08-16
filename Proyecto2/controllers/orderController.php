<?php
require_once 'models/orders.php';

class orderController{
    public function orderUser(){
        // echo "Controlador realizar pedido, accion index";
        require_once 'views/orders/orderNew.php';
    }
    public function addOrder(){
        if(isset($_SESSION['identity'])){
            // validacion de datos
            $pais = $_POST['pais'];
            // guardar datos en la bd
            $order = new Orders();
            $order->setPais($pais);


        }else{
            // redirigir al login
            header("Location:".base_url);
        }
    }
}