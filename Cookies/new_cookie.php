<?php
// <!-- crear cookies -->

// cookie basica
setcookie('micookie', 'valor de mi cookie');

// cookie con expiración
setcookie('year', 'valor cookie 365 dias', time() + (60*60*24*365));

header('Location:ver_cookies.php');
?>

