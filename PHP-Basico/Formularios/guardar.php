<?php

/*if(isset($_GET['titulo']) && isset($_GET['descripcion'])){
    echo '<h2>'.$_GET['titulo'].'</h2>';
    echo '<h3>'.$_GET['descripcion'].'</h3>';
}*/


if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo '<h2>'.$_POST['titulo'].'</h2>';
    echo '<h3>'.$_POST['descripcion'].'</h3>';
}