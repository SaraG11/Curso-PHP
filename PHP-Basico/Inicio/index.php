<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <!--<form method="GET" action="recibir.php">-->
    <form method="POST" action="recibir.php">
        <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="">
        </p>
        <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="">
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
