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

            if($nombre && $descripcion && $categoria && $precio && $stock){
                $product = new Product();
                $product->setNombre($nombre);
                $product->setDescripcion($descripcion);
                $product->setCategoria_id($categoria);
                $product->setPrecio($precio);
                $product->setStock($stock);

                // Guardar la imagen 
                if(isset($_FILES['imagen'])){
                    $file = $_FILES['imagen'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];
                    if($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){
                        if(!is_dir('uploads/images')){
                            mkdir('uploads/images', 0777, true);
                        }
                        $product->setImagen($filename);
                        move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                    }
                }
                // validacion para actualizar registro
                if(isset($_GET['id_prod'])){
                    $id_prod = $_GET['id_prod'];
                    $product->setId($id_prod);
                    $save = $product->edit();
                }else{
                    // aquí va para el guardado
                    $save = $product->save();
                }
                
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
        header("Location:".base_url."?controller=product&action=gestion");
    }
    public function deleteProd() {
        utils::isAdmin();
        if(isset($_GET['id_prod'])){
            $id_prod = $_GET['id_prod'];
            $product = new Product;
            $product->setId($id_prod);
            $delete = $product->delete();
            if($delete){
                $_SESSION['delete'] = 'complete';
            }else{
                $_SESSION['delete'] = 'failed';
            }
        }else{
            $_SESSION['delete'] = 'failed';
        }
        header('Location:'.base_url.'?controller=product&action=gestion');
        
    }
    public function editProd(){
        Utils::isAdmin();
        
        if(isset($_GET['id_prod'])){
            $id_prod = $_GET['id_prod'];
            $edit = true;
            $product = new Product();
            $product->setId($id_prod);
            $prod = $product->getOne();
            require_once 'views/products/newProduct.php';
        }else{
            header('Location:'.base_url.'?controller=product&action=gestion');
        }
        
    }

}