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
            $id_user = $_SESSION['identity']->id;
            // var_dump($_SESSION['identity']);
            // var_dump($id_user);
            $pais = isset($_POST['pais']) ? $_POST['pais'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats = Utils::statsCarrito();
            $precio = $stats['total'];
            
            if($pais && $localidad && $direccion){
                // guardar datos en la bd
                $order = new Orders();
                $order->setUser_id($id_user);
                $order->setPais($pais);
                $order->setLocalidad($localidad);
                $order->setDireccion($direccion);
                $order->setPrecio($precio);
                // var_dump($order);
                
                // guardar en la bd
                $save = $order->save();
                // guardar la linea del pedido
                $save_line = $order->save_line();
                // var_dump($save);
                if($save && $save_line){
                    $_SESSION['order'] = 'complete';
                }else{
                    $_SESSION['order'] = 'failed';
                }

            }else{
                $_SESSION['order'] = 'failed';
            }
            header("Location:".base_url."?controller=order&action=orderComplete");

        }else{
            // redirigir al login
            echo "No recibe ningun dato";
        }
    }
    public function orderComplete(){
        if(isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $order = new Orders();
            $order->setUser_id($identity->id);
            $order = $order->getOneByUser();

            $order_prod = new Orders();
            $products = $order_prod->getProductsByOrders($order->id_ped);

        }
        require_once 'views/orders/complete.php';
    }

    public function my_orders(){
        Utils::isIdentity();
        $user_id = $_SESSION['identity']->id;
        $order = new Orders();
        // obtener datos del usuario
        $order->setUser_id($user_id);
        $orders = $order->getAllByUser();
        require_once 'views/orders/my_orders.php';
    }
    public function detail(){
        Utils::isIdentity();
        if(isset($_GET['id_ped'])){
            $id_ped = $_GET['id_ped'];
            // obtener los datos del pedido
            $order = new Orders();
            $order->setIdPed($id_ped);
            $order = $order->getOne();

            // obtener los productos
            $order_prod = new Orders();
            $products = $order_prod->getProductsByOrders($id_ped);
            
            require_once 'views/orders/detail.php';
        }else{
            header('Location:'.base_url.'?controller=order&action=my_orders');
        }

    }
}