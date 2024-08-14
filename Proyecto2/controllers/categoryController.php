<?php
require_once 'models/category.php';
require_once 'models/product.php';

class categoryController{

    public function index(){
        utils::isAdmin();
        $category = new Category();
        $categories = $category->getAll();
        // cargar vista
        require_once 'views/categories/index.php';
    }
    public function showCat(){
        if(isset($_GET['id_cat'])){
            $id_cat = $_GET['id_cat'];
            // conseguir categoria
            $category = new Category();
            $category->setId($id_cat);
            
            $category = $category->getOne();
            // cargar todos los productos que pertenecen a la categoria
            $product = new Product();
            $product->setCategoria_id($id_cat);
            $products = $product->getAllCategory();
            // var_dump($products);

        }
        require_once 'views/categories/show.php';
    }
    public function create(){
        utils::isAdmin();
        require_once 'views/categories/create.php';
    }
    public function saveCategory(){
        utils::isAdmin();

        if(isset($_POST) && isset($_POST['nombre'])){
            // guardar categoria
            $category = new Category();
            $category->setNombre($_POST['nombre']);
            $category->save();

        }
        header("Location:".base_url."?controller=category&action=index");
        
    }
}