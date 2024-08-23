<?php
require_once 'models/product.php';

class carritoController{
    public function index(){
        if(isset($_SESSION['carrito'])){
            $carrito = $_SESSION['carrito'];
        } else {
            $carrito = array();
        }
        // var_dump($_SESSION['carrito']);
        // die();
        require_once 'views/carrito/viewCarrito.php';
    }
    public function add(){
        if($_GET['id_prod']){
            $product_id = $_GET['id_prod'];
        }else{
            header("Location:".base_url."?controller=home&action=body");
        }
        if(isset($_SESSION['carrito'])){
            $counter = 0;
            // si ya existe el carrito
            foreach($_SESSION['carrito'] as $indice => $element){
                if($element['id_prod'] == $product_id){ //si el producto ya existe en el carrito lo que hará 
                    $_SESSION['carrito'][$indice]['unidades']++; //será aumentar las unidades
                    $counter++;
                }
            }
        }
        if(!isset($counter) || $counter == 0){
            $product = new Product();
            $product->setId($product_id);
            $productData = $product->getOne();
            
            if(is_object($productData)){
                $_SESSION['carrito'][] = array(
                    "id_prod" => $productData->id_prod,
                    "precio" => $productData->precio,
                    "unidades" => 1,
                    "nombre" => $productData->nombre,
                    "imagen" => $productData->imagen,
                    "id_cat" => $productData->id_cat
                );
            }
        }
        
        header("Location:".base_url."?controller=carrito&action=index");
    }
    public function remove(){
        if(isset($_SESSION['carrito'])){
            $index = $_GET['index'];
            unset($_SESSION['carrito'][$index]);
        }
        header("Location:".base_url."?controller=carrito&action=index");
    }
    public function up(){
        if(isset($_SESSION['carrito'])){
            $index = $_GET['index'];
            $_SESSION['carrito'][$index]['unidades']++;
        }
        header("Location:".base_url."?controller=carrito&action=index");
    }
    public function down(){
        if(isset($_SESSION['carrito'])){
            $index = $_GET['index'];
            $_SESSION['carrito'][$index]['unidades']--;

            if($_SESSION['carrito'][$index]['unidades'] == 0){
                unset($_SESSION['carrito'][$index]);
            }
        }
        header("Location:".base_url."?controller=carrito&action=index");
    }
    public function deleteAll(){
        unset($_SESSION['carrito']);
        header("Location:".base_url."?controller=carrito&action=index");
        
    }
}