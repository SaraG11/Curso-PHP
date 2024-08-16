<!-- posible codigo para el requeirmiento de sesion -->

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
    <!-- Incio de sesion -->
    <div class="container-sm mt-4">
        <form action="<?=base_url?>?controller=order&action=addOrder" action="POST" class="row g-3" novalidate>
            <div class="row justify-content-start">
                <div class="col-3">
                    <label for="pais" class="form-label">País</label>
                    <input type="text" class="form-control" name="pais" required>
                </div>
                <div class="col-3">
                    <label for="localidad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="localidad" required>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-8">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" placeholder="1234 Main St" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
    </form>
    </div>

<script src="../../assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- <script>
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
</script> -->
</body>
</html>