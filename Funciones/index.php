<?php

function muestraNombres(){
    echo 'SG <br>';
    echo 'Pedro <br>';
    echo 'Juan <br>';
    echo 'Karla <br>';
}

//muestraNombres();

function multiplicar($numero){
    //var_dump($numero);
    echo '<h3> Tabla de multiplicar del numero:'.$numero.'</h3>';
    for($i=1; $i <= 10; $i++){
        echo $numero * $i;
        echo '<br>';
    }
}
//multiplicar(3);
if(isset($_GET['numero'])){
    multiplicar($_GET['numero']);
}else{
    echo 'No hay numero que multiplicar';
}

?>