
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
                    <form action="index.php?controller=users&action=saveUser" method="POST">
                        <div class="mb-3 d-flex flex-column">
                            <label for="nombre" class="form-label text-light fw-bolder">Name</label>
                            <input type="text" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Name(s)" name="nombre" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="apellidos" class="form-label text-light fw-bolder">Last Name</label>
                            <input type="text" class="form-control-lg bg-dark-x border-0 text-light" placeholder="LastName" name="apellidos">
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="email" class="form-label text-light fw-bolder">Email address</label>
                            <input type="email" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Email address" name="email" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="password" class="form-label text-light fw-bolder">Password</label>
                            <input type="password" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Password" name="password">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-2" id="register" type="submit">Register</button>
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