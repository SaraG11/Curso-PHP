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
<body>
    <!-- header -->
    
    <!-- Incio de sesion -->
    <div class="container-md mt-5">
        <form action="<?=base_url?>?controller=product&action=saveProd" method="POST">
            <div class="row g-3">
                <div class="col-md-3 px-2">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-md-6">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="categoria" class="form-label">Categoria</label>
                    <?php $categories = Utils::showCategories(); ?>
                    <select name="categoria" class="form-select">
                    <option selected>Selected..</option>
                    <?php while($cat = $categories->fetch_object()): ?>
                        <option value="<?=$cat->id_cat ?>">
                            <?=$cat->nombre;?>
                        </option>
                    <?php endwhile ?>
                    </select>
                </div>
                <div class="col-2">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio">
                </div>
                <div class="col-2">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-5 mb-3">
                    <input class="form-control" type="file" name="imagen">
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>