<!-- Condicion para la direccion del formulario de acuerdo a la peticion -->
<?php
if(isset($edit) && isset($prod) && is_object($prod)){
    $url_action = base_url.'?controller=product&action=saveProd&id_prod='.$prod->id_prod;
}else{
    $url_action = base_url.'?controller=product&action=saveProd';
}

?>
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
    
    <!-- Formulario para nuevo producto -->
    <div class="container-md mt-5">
        <form class="needs-validation" action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-3 px-2">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?= isset($prod) && is_object($prod) ? $prod->nombre : ''; ?>">
                </div>
                <div class="col-md-6">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="<?= isset($prod) && is_object($prod) ? $prod->descripcion : ''; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="categoria" class="form-label">Categoria</label>
                    <?php $categories = Utils::showCategories(); ?>
                    <select name="categoria" class="form-select">
                    <option selected>Selected..</option>
                    <?php while($cat = $categories->fetch_object()): ?>
                        <option value="<?=$cat->id_cat ?>" <?=isset($prod) && is_object($prod) && $cat->id_cat == $prod->id_cat ? 'selected' : '';?> >
                            <?=$cat->nombre;?>
                        </option>
                    <?php endwhile ?>
                    </select>
                </div>
                <div class="col-2">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio" value="<?= isset($prod) && is_object($prod) ? $prod->precio : ''; ?>">
                </div>
                <div class="col-2">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" value="<?= isset($prod) && is_object($prod) ? $prod->stock : ''; ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5 mb-3">
                    <input class="form-control" type="file" name="imagen">
                </div>
                <div class="col-12">
                <?php if(isset($prod) && is_object($prod) && !empty($prod->imagen)) : ?>
                        <img src="<?=base_url?>/uploads/images/<?=$prod->imagen?>" width="150px">
                    <?php endif;?>
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz5JQvFLb5Oe3MY1/df9gImpphH5G1R8Pp2NdT1wZjf9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>