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
                        <li><a class="dropdown-item" href="<?=base_url?>?controller=order&action=management">Gestionar pedidos</a></li>
                      <?php endif; ?>
                      <?php if(!isset($_SESSION['admin'])): ?>
                        <?php $stats = Utils::statsCarrito() ?>
                        <li><a class="dropdown-item" href="<?=base_url?>?controller=order&action=my_orders">Mis pedidos</a></li>
                      <li><a class="dropdown-item" href="<?=base_url?>?controller=carrito&action=index">Mi Carrito (<?=$stats['count']?>)</a></li>
                      <?php endif; ?>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=base_url?>?controller=users&action=logout">Cerrar Sesion</a></li>
                      
                    </ul>
                  </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Validacion de si existen articulos en el carrito si no manda un mensaje -->
    <?php if(!isset($_SESSION['carrito'])) : ?>
            <div class="container text-center mt-4">
                <div class="col-12">
                    <div class="mb-3">
                        <h2>No tienes artículos agregados al carrito</h2>
                    </div>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores molestias doloremque in? Harum, ab necessitatibus!</p>
                </div>
            </div>
        <?php else: ?>
    <div class="container mt-4">
        <table class="table table-sm align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($carrito as $indice => $element) : 
                ?>
                <tr>
                    <td style="width: 5% !important;">
                        <?php if($element['imagen'] != null) : ?>
                            <img src="<?=base_url?>uploads/images/<?=$element['imagen']?>" class="card-img-top img-carrito" alt="">
                        <?php else: ?>
                            <img src="<?=base_url?>assets/img/ropa_global.jpg" class="card-img-top img-carrito" alt="">
                        <?php endif;?>
                    </td>
                    <td style="width: 5% !important;">
                        <h5><a class="link-dark link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="<?=base_url?>?controller=category&action=showCat&id_cat=<?=$element['id_cat']?>"><?=$element['nombre'] ?></a></h5>
                        <small>Precio Unidad: $<?=$element['precio'] ?></small> <br>
                        <small>Unidades: 
                            <a class="btn" href="<?=base_url?>?controller=carrito&action=down&index=<?=$indice?>">-</a> <?=$element['unidades'] ?> <a class="btn" href="<?=base_url?>?controller=carrito&action=up&index=<?=$indice?>">+</a></small>
                    </td>
                    <td style="width: 8% !important;">
                        <a href="<?=base_url?>?controller=carrito&action=remove&index=<?=$indice?>"><ion-icon name="trash" class="icon-delete"></ion-icon></a>
                    </td>
                </tr>
                <?php endforeach;?>
                <tr>
                <th scope="row">Total</th>
                <?php $stats = Utils::statsCarrito();?>
                    <td >$ <?=$stats['total']?></td>
                    <td ><a href="<?=base_url?>?controller=order&action=orderUser" class="btn btn-warning">Realizar Pedido</a></td>                    
                </tr>
            </tbody>
        </table>
        <a href="<?=base_url?>?controller=carrito&action=deleteAll" class="btn btn-danger mt-5">Vaciar Carrito</a>
    </div>
    <?php endif;?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz5JQvFLb5Oe3MY1/df9gImpphH5G1R8Pp2NdT1wZjf9" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>