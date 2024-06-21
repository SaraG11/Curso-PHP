<?php

// conectar a la base de datos
$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "curso"
);

if(mysqli_connect_errno()){
    echo "La conexion a la base de datos Mysql ha fallado".mysqli_connect_errno();
}else{
    echo "Conexion exitosa<br>";
}

// consulta para configurar la configuracion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// CONSULTA SELECT

$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    // var_dump($nota);
    echo $nota['descripcion'].'<br>';
}

// insertar datos 
$sql = "INSERT INTO notas VALUES(NULL,'nota desde PHP', 'Esto es una insercion desde php', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "Datos insertados con éxito";
}else{
    echo 'Error: '.mysqli_error($conexion);
}