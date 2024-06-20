<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h3>Formulario</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre"></p> 

        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido"></p>

        <label for="boton">Boton: </label>
        <p><input type="submit" name="boton" value="Click"></p>

        <label for="sexo">Sexo: </label>
        <p>
            H<input type="checkbox" name="sexo" value="H">
            M<input type="checkbox" name="sexo" value="M" checked>
        </p>

        <label for="color">Color: </label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Date: </label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">Email: </label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo: </label>
        <p><input type="file" name="archivo"></p>


        <input type="submit" value="Enviar">

    </form>
</body>
</html>
<?php

