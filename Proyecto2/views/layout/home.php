<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../Proyecto2/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand fw-semibold" id="nb-brand" href="#">T-Shirt</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Sudaderas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Playeras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Camisas</a>
                        </li>
                    </ul>
                    <div class="dropdown text-end">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="mdo" width="37" height="37" class="rounded-circle me-2">
                      <div class="d-flex flex-column text-start">
                        <span style="font-weight: 700;">Sara G</span>
                      </div>
                    </a>
                    <ul class="dropdown-menu text-small">
                      <li><a class="dropdown-item" href="#">Mis pedidos</a></li>
                      <li><a class="dropdown-item" href="#">Cuenta</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Body de menu de catalogo -->
    <div class="row" style="margin-right: 0px;">
        <div class="col-lg-4 px-0 h-470 opacity-black bg-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),  rgba(0, 0, 0, 0.5)), url(../../../Proyecto2/assets/img/sueter_inicio.jpg);">
            <div class="card bg-transparent border-none h-100">
                <div class="card-body d-flex align-items-end justify-content-center">
                    <h1 class="fw-700 text-light">Sueters</h1>
                </div>
                <div class="card-body d-flex align-items-end justify-content-center">
                <button class="btn mb-4 btn-primary btn-style d-flex align-items-center">Shop <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></button>
            </div>
            </div>
        </div>
        <div class="col-lg-4 px-0 h-470 opacity-black bg-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),  rgba(0, 0, 0, 0.5)), url(../../../Proyecto2/assets/img/sudaderas.jpg);">
            <div class="card bg-transparent border-none h-100">
                <div class="card-body d-flex align-items-end justify-content-center">
                    <h1 class="fw-700 text-light">Sudaderas</h1>
                </div>
                <div class="card-body d-flex align-items-end justify-content-center">
                <button class="btn mb-4 btn-primary btn-style d-flex align-items-center">Shop <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></button>
            </div>
            </div>
        </div>
        <div class="col-lg-4 px-0 h-470 opacity-black bg-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),  rgba(0, 0, 0, 0.5)), url(../../../Proyecto2/assets/img/playera_inicio.jpg);">
            <div class="card bg-transparent border-none h-100">
                <div class="card-body d-flex align-items-end justify-content-center">
                    <h1 class="fw-700 text-light">Playeras</h1>
                </div>
                <div class="card-body d-flex align-items-end justify-content-center">
                <button class="btn mb-4 btn-primary btn-style d-flex align-items-center">Shop <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></button>
            </div>
            </div>
        </div>
    <!-- body de informacion -->
        <section class="py-28">
            <div class="container text-center">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="mb-2">
                            <small class="text-muted fw-500">NEW COLECTION</small>
                        </div>
                        <div class="mb-3">
                            <h1>BEST PICK 2024</h1>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores molestias doloremque in? Harum, ab necessitatibus!</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-4 h-400">
                        <div class="card h-100 border-none" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),  rgba(0, 0, 0, 0.3)), url(../../../Proyecto2/assets/img/img_body2.jpg); border-radius: 0px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <span class="text-white fw-700 fs-2">Pantalones</span>
                                <a class="text-white fw-700" href="" style="text-decoration: none;">View <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 h-400">
                    <div class="card h-100 border-none bg-img" style="background-image: url(../../../Proyecto2/assets/img/img_body.png); border-radius: 0px;">
                            <div class="card-body px-4 d-flex flex-column justify-content-center align-items-start">
                                <span class="text-dark fw-700 fs-2">Collection</span>
                                <a class="text-dark fw-700" href="" style="text-decoration: none;">View <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 h-400 mb-5">
                        <div class="card h-100 w-100 border-none bg-img" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2),  rgba(0, 0, 0, 0.2)), url(../../../Proyecto2/assets/img/img_body5.jpg); border-radius: 0px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-start">
                                <span class="text-white fw-700 fs-2">Temporada</span>
                                <a class="text-white fw-700" href="#" style="text-decoration: none;">View <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 h-400">
                    <div class="card h-100 border-none bg-img"" style="background-image: url(../../../Proyecto2/assets/img/deportivo.jpg); border-radius: 0px;">
                            <div class="card-body px-4 d-flex flex-column justify-content-center align-items-center">
                                <span class="text-dark fw-700 fs-2">Collection</span>
                                <a class="text-dark fw-700" href="#" style="text-decoration: none;">View <ion-icon class="ms-2" name="arrow-forward-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>