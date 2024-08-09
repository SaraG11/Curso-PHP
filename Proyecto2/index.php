<?php
session_start();
require_once './autoload.php';
require_once './config/db.php';
require_once './config/parameters.php';
require_once './helpers/utils.php';


function showError(){
    $error = new errorController();
    $error->index();
}
// if(isset($_GET['controller'])){
//     $name_controller = $_GET['controller'].'Controller';

// }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
//     require_once './views/login.php';

// }else{
    
//    showError();
//     // echo 'Error 1'; 
//     exit();
// }

// if(class_exists($name_controller)){
    
//     $controlador = new $name_controller();
   
//     if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
//         $action = $_GET['action'];
//         $controlador->$action();

//     }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
//         $defaul = action_default;
//         $controlador->$action_default(); 
//     }else{
//         showError();
//     }
// }else{
//     showError();
// }


if(isset($_GET['controller']) && class_exists($_GET['controller'].'Controller') && isset($_GET['action']) && method_exists($_GET['controller'].'Controller', $_GET['action'])){
    $name_controller = $_GET['controller'].'Controller';
    $controlador = new $name_controller();
    $action = $_GET['action'];
    $controlador->$action();
    

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        require_once './views/login.php';
        // echo 'Fail controller and action';
    
}else{
    showError();

}

?>