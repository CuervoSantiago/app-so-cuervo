<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Sistemas Operativos - Despliegue</title>
</head>
<body class="bg-light">
    <div class="container min-vh-100-d-flex flex-column justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="max-width: 400px; width 100%;"> 
        <?php
        $nombre = "Santiago";
        $fecha = date("d/m/v");
        $hora = date("H:i");
        ?>
        <div class="text-center">
        <h1 class="display-5 mb-3 text-primary"> Hola, <?php echo $nombre;?></h1>
        <p class="lead">Bienvenido a nuestro sitio web</p>
        <hr>
        <p class="text-muted mb-0">
            <i class="bi bi-calendar-date"></i>
            <?php echo $fecha." ";?>
            <i class="bi bi-clock"></i>
            <?php  $hora;?>
            </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</body>
</html>

