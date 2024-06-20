<?php

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie', '', time()-100);
}
// reedireccion

header('Location:ver_cookies.php');
