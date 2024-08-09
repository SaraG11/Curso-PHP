
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">
    <!-- Incio de sesion -->
    <div class="container">
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-sm-7 d-flex justify-content-center align-items-center mt-6">
                <img src="<?=base_url?>assets/img/registro.png" style="width: 550px;">
            </div>
            <div class="col-lg-5">
                <h2 class="text-center text-light mb-3">T-Shirt Store</h2>
                <form class="needs-validation" action="<?=base_url?>?controller=users&action=saveUser" method="POST" novalidate>
                        <div class="mb-3 d-flex flex-column">
                            <label for="nombre" class="form-label text-light fw-bolder">Name</label>
                            <input type="text" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Name(s)" name="nombre"  required>
                            <!-- mensaje de validacion -->
                             <div class="invalid-feedback">
                                El nombre no es válido. Debe contener solo letras y no estar vacío.
                            </div>
                            <div class="valid-feedback">
                                Nombre válido
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="apellidos" class="form-label text-light fw-bolder">Last Name</label>
                            <input type="text" class="form-control-lg bg-dark-x border-0 text-light" placeholder="LastName" name="apellidos" required>
                             <!-- mensaje de validacion -->
                             <div class="invalid-feedback">
                                Introduce correctamente los apellidos
                            </div>
                            <div class="valid-feedback">
                                Apellidos válidos
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="email" class="form-label text-light fw-bolder">Email address</label>
                            <input type="email" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Email address" name="email" aria-describedby="emailHelp" required>
                             <!-- mensaje de validacion -->
                             <div class="invalid-feedback">
                                Introduce un email válido
                            </div>
                            <div class="valid-feedback">
                                Email válido
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="password" class="form-label text-light fw-bolder">Password</label>
                            <input type="password" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Password" name="password" required>
                             <!-- mensaje de validacion -->
                             <div class="invalid-feedback">
                                La contraseña no es válida. Debe tener al menos 8 caracteres, incluir al menos un número y una letra mayúscula.
                            <div class="valid-feedback">
                                Contraseña válida
                            </div>
                        </div>
                        <?php
                            if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
                        <div class="alert alert-success" role="alert">
                            ¡Registro completado!
                        </div>
                        <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
                            <div class="alert alert-danger" role="alert">
                                ¡Registro fallido!, verifica los datos
                            </div>
                        <?php endif;?>
                        <?php utils::deleteSession('register'); ?>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-2" id="register" type="submit">Register</button>
                        </div>
                        
                    </form>
             </div>
            </div>
        </div>
    </div>

<script src="../../assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')

        }, false)
        })
</script>
</body>
</html>