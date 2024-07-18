
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Bienvenido a MVC </h3>
</body>
</html>
<?php
// require_once './controllers/userController.php';
// require_once './controllers/notaController.php';
require_once './autoload.php';

if(isset($_GET['controlador'])){
    $name_controller = $_GET['controlador'].'Controller';
    // var_dump($name_controller);
}else{
    echo "El controlador no existe";
    exit();
}

if(class_exists($name_controller)){
    
    $controlador = new $name_controller();
   
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
       
    }else{
        echo "La página no existe";
    }
}else{
    echo "La página no existe2";
}




?>
