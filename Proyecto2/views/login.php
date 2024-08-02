<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop </title>
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
            <div class="col-sm-7 d-flex justify-content-center align-items-center">
                <img src="<?=base_url?>assets/img/logo.jpg" style="width: 500px;">
                <!-- <h2>Bienvenido</h2> -->
            </div>
            <div class="col-lg-5 ">
                <h2 class="text-center text-light mb-5">T-Shirt Store</h2>
                    <form>
                        <div class="mb-3 d-flex flex-column">
                            <label for="email" class="form-label text-light fw-bolder">Email address</label>
                            <input type="email" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Email address" id="email" name="email" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="password" class="form-label text-light fw-bolder">Password</label>
                            <input type="password" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Password" name="password" id="password">
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="p-2"><label for="exampleInputEmail1" class="form-label text-light fw-bolder">¿Aún no tienes cuenta? </label></div>
                            <div class="p-2"><a href="<?=base_url?>views/user/register.php">Registrar</a></div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-2" id="ingresar" type="button">Ingresar</button>
                            <!-- <a class="btn btn-primary mt-2" id="ingresar" href="../views/producto/principal.php">Ingresar</a> -->
                        </div>
                        
                    </form>
             </div>
            </div>
        </div>
    </div>

   
   
<script src="./assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>