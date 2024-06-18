<?php

/* mostrar valor de las cookies, se tiene que usar $_COOKIE, variable superglobal
es un array asociativos */

if(isset($_COOKIE['micookie'])){
    echo '<h3>'.$_COOKIE['micookie'].'</h3>';
}else{
    echo 'No existe la cookie';
}

if(isset($_COOKIE['year'])){
    echo '<h3>'.$_COOKIE['year'].'</h3>';
}else{
    echo 'No existe la cookie';
}

?>
<a href="new_cookie.php">Crear cookies</a>
<a href="delete_cookies.php">Borrar cookies</a>