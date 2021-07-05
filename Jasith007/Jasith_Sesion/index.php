<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="mt-5 text-center">
        <a href="sesion.php" class="btn btn-success mt-3">Iniciar Sesion</a>
        <a href="protegido.php" class="btn btn-warning mt-3">Contenido Protegido</a>
        <div></div>
        <h1 class=''>Bienvenido <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Invitado' ?></h1>
        <a href="http://localhost/Jasith007/" class=" mt-3 btn btn-secondary fst-italic center fw-bold ">volver a inicio</a>
    </div>
</body>

</html>