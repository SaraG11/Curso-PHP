<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Productos</title>
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
                <a class="navbar-brand fw-semibold" id="nb-brand" href="<?=base_url?>?controller=home&action=body">T-Shirt</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php $categories = Utils::showCategories(); ?>
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=base_url?>?controller=home&action=body">Home</a>
                        </li>
                        <!-- Listado de categorias en el menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <?php while($cat = $categories->fetch_object()): ?>
                                <li><a class="dropdown-item" href="<?=base_url?>?controller=category&action=showCat&id_cat=<?=$cat->id_cat?>"><?= $cat->nombre ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </li>
                        <!-- fin de listado de categorias -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="dropdown text-end">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="<?=base_url?>assets/img/usuario.png" alt="mdo" width="37" height="37" class="rounded-circle me-2">
                      <div class="d-flex flex-column text-start">
                        <span style="font-weight: 700;"><?= $_SESSION['identity']->nombre ?></span>
                      </div>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">Cuenta</a></li>
                      <!-- opciones de administrador -->
                      <?php if(isset($_SESSION['admin'])) : ?>
                        <li><a class="dropdown-item" href="<?=base_url?>?controller=category&action=index">Gestionar categorias</a></li>
                        <li><a class="dropdown-item" href="<?=base_url?>?controller=product&action=gestion">Gestionar productos</a></li>
                        <li><a class="dropdown-item" href="#">Gestionar pedidos</a></li>
                      <?php endif; ?>
                      <?php if(isset($_SESSION['identity'])): ?>
                      <li><a class="dropdown-item" href="#">Mis pedidos</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url?>?controller=users&action=logout">Cerrar Sesion</a></li>
                      <?php endif; ?>
                      
                    </ul>
                  </div>
                </div>
            </div>
        </nav>
    </header>    
    <!-- BODY DE CARDS -->
    <div class="container mt-5">
        <div class="container text-center">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="mb-3">
                          <!-- Mostrar nombre de categoria -->
                          <?php if(isset($category)): ?>
                            <h1><?=$category->nombre ?></h1>
                            <?php else: ?>
                              <h2>La categoría no existe</h2>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php if($products->num_rows == 0) : ?>
              <div class="mb-2">
                <small class="text-muted fw-500">No hay productos para mostrar</small>
              </div>
            <?php else: ?>
            <div class="row">
                <!-- Cards de cada producto -->
                <?php while($product = $products->fetch_object()) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <?php if($product->imagen != null) : ?>
                          <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="card-img-top" alt="" height="300px">
                        <?php else: ?>
                          <img src="<?=base_url?>assets/img/ropa_global.jpg" class="card-img-top" alt="" height="300px">
                        <?php endif;?>
                        <div class="card-body">
                            <h5 class="card-title"><?=$product->nombre?></h5>
                            <p class="card-text"><?=$product->descripcion?></p>
                            <p class="card-text">$<?=$product->precio?></p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-info">Agregar</a>
                            <!-- <a href="#" class="btn ">Another link</a> -->
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif;?>
        </div>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz5JQvFLb5Oe3MY1/df9gImpphH5G1R8Pp2NdT1wZjf9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>