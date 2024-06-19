<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <h2>Formulario</h2>
    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 'faltan_datos'){
            echo '<strong style="color:red"> Introduce todos los campos del formualrio</strong>';
        }
        if($error == 'nombre'){
            echo '<strong style="color:red"> Introduce el nombre correctamente</strong>';
        }
        if($error == 'apellido'){
            echo '<strong style="color:red"> Introduce el apellido correctamente</strong>';
        }
        if($error == 'edad'){
            echo '<strong style="color:red"> Introduce la edad correctamente</strong>';
        }
        if($error == 'email'){
            echo '<strong style="color:red"> Introduce un email valido</strong>';
        }
        if($error == 'pass'){
            echo '<strong style="color:red"> Introduce una contraseña válida, mas de 5 caracteres</strong>';
        }
    }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" ><br>

        <label for="apellido">Apellidos:</label><br>
        <input type="text" name="apellido"><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad"><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email"><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" name="pass"><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>