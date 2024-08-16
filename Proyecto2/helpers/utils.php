<?php

class utils{
    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name; 
    }
    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }
    public static function showCategories(){
        require_once 'models/category.php';
        $category = new Category();
        $categories = $category->getAll();

        return $categories;
    }
    public static function statsCarrito(){
        $stats = array(
            'count' => 0,
            'total' => 0
        );
        if(isset($_SESSION['carrito'])){
            $stats['count'] = count($_SESSION['carrito']);
            foreach($_SESSION['carrito'] as  $producto){
                $stats['total'] += $producto['precio'] * $producto['unidades'];

            }
        }
        return $stats;
    }
}