<?php
require_once 'models/category.php';

class categoryController{

    public function index(){
        $category = new Category();
        $categories = $category->getAll();
        // cargar vista
        require_once 'views/categories/index.php';
    }
    public function create(){
        require_once 'views/categories/create.php';
    }
    public function save(){
        
    }
}