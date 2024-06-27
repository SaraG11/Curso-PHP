<?php 
require_once 'conection.php';
?>
<!-- SILDEBAR -->
<aside id="sidebar">
        <div id="login" class="block-aside">
            <h3>Login</h3>
            <form action="login.php" method="POST">
                
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="pass">Contraseña</label>
                <input type="password" name="pass">

                <input type="submit" value="Entrar">

            </form>
        </div>

        <div id="register" class="block-aside">
            <h3>Regístrate</h3>
            <form action="registro.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">

                <label for="appellidos">Apellidos</label>
                <input type="text" name="apellidos">

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="pass">Contraseña</label>
                <input type="password" name="pass">

                <input type="submit" value="Registrar">

            </form>
        </div>

    </aside>