<?php
require_once 'models/product.php';

class productController{

    public function index(){
        utils::isAdmin();
        $category = new Category();
        $categories = $category->getAll();
        // cargar vista
        require_once 'views/product/products.php';
    }
    public function gestion(){
        Utils::isAdmin();
        $product = new Product();
        $products = $product->getAll();
        require_once 'views/products/gestion.php';
    }
    public function create(){
        Utils::isAdmin();
        require_once 'views/products/newProduct.php';
    }
    public function saveProd(){
        Utils::isAdmin();
        if(isset($_POST)){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            // $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
            if($nombre && $descripcion && $categoria && $precio && $stock){
                $product = new Product();
                $product->setNombre($nombre);
                $product->setDescripcion($descripcion);
                $product->setCategoria_id($categoria);
                $product->setPrecio($precio);
                $product->setStock($stock);

                $save = $product->save();
                if($save){
                    $_SESSION['product'] = 'complete';
                }else{
                    $_SESSION['product'] = 'failed';
                }
            }else{
                $_SESSION['product'] = 'failed';
            }
        }else{
            $_SESSION['product'] = 'failed';
        }
    }
}