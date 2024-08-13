<?php
require_once 'models/category.php';

class categoryController{

    public function index(){
        utils::isAdmin();
        $category = new Category();
        $categories = $category->getAll();
        // cargar vista
        require_once 'views/categories/index.php';
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