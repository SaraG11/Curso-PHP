<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">
    <!-- Incio de sesion -->
    <div class="container">
        <div class="row mt-5 d-flex align-items-center">
            <div class="col-sm-7 d-flex justify-content-center align-items-center mt-6">
                <img src="../../assets/img/registro.png" style="width: 550px;">
                <!-- <h2>Bienvenido</h2> -->
            </div>
            <div class="col-lg-5">
                <h2 class="text-center text-light mb-3">T-Shirt Store</h2>
                    <form action="index.php?controller=users&action=saveUser" method="POST">
                        <div class="mb-3 d-flex flex-column">
                            <label for="exampleInputEmail1" class="form-label text-light fw-bolder">Name</label>
                            <input type="text" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Name(s)" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="exampleInputPassword1" class="form-label text-light fw-bolder">Last Name</label>
                            <input type="text" class="form-control-lg bg-dark-x border-0 text-light" placeholder="LastName" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="exampleInputEmail1" class="form-label text-light fw-bolder">Email address</label>
                            <input type="email" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label for="exampleInputPassword1" class="form-label text-light fw-bolder">Password</label>
                            <input type="password" class="form-control-lg bg-dark-x border-0 text-light" placeholder="Password" id="exampleInputPassword1">
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-2" id="register" type="button">Register</button>
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