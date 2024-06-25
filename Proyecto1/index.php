<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="./assets/css/style.css">
    <title>Viodeojuegos</title>
</head>
<body>
    <!-- CABECERA -->
    <header id="header">
        <div id="logo">
            <a href="index.php">
                Blog De Videojuegos
            </a>
        
        </div>
        <!-- MENU -->
    <nav id="nav">
        <ul>
            <li><a href="index.php"> Inicio</a></li>
            <li><a href=""> Categoria 1</a></li>
            <li><a href=""> Categoria 2</a></li>
            <li><a href=""> Categoria 3</a></li>
            <li><a href=""> Categoria 4</a></li>
            <li><a href=""> Sobre mi</a></li>
            <li><a href=""> Contacto</a></li>

        </ul>
    </nav>
    </header>
    <div id="container">
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
    <!-- CONTENT  -->
    <div class="principal">
        <h2>Ultimas entradas</h2>
        <article class="entrada">
            <h2>Titutlo de entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae error enim totam placeat quasi aspernatur nobis eum ipsam repudiandae.</p>

        </article>

        <article class="entrada">
            <h2>Titutlo de entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae error enim totam placeat quasi aspernatur nobis eum ipsam repudiandae.</p>

        </article>

        <article class="entrada">
            <h2>Titutlo de entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae error enim totam placeat quasi aspernatur nobis eum ipsam repudiandae.</p>

        </article>

        <article class="entrada">
            <h2>Titutlo de entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae error enim totam placeat quasi aspernatur nobis eum ipsam repudiandae.</p>

        </article>
        <article class="entrada">
            <h2>Titutlo de entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores recusandae error enim totam placeat quasi aspernatur nobis eum ipsam repudiandae.</p>

        </article>
    </div>

    </div>

    <!-- FOOTER -->
    <footer id="footer">
        <p>Desarrollado por Sara Gonzalez &copy; 2024</p>
    </footer>
</body>
</html>