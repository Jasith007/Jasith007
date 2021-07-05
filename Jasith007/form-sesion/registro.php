<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark">
    <div class="container shadow-lg rounded">

        <form class=" mt-5 form-label row " action="agregar_usuario.php" method="POST">
            <input class="form-control p-2 mt-2 col" type="text" name="nombre_usuario" placeholder="Ingresa Usuario">
            <div></div>
            <input class="form-control mt-2 col" type="text" name="contrasena" placeholder="Ingresa Contraseña">
            <div></div>
            <input class="form-control mt-2 col" type="text" name="contrasena2" placeholder="Ingresa Nuevamente La Contraseña">

            <button class="fw-bold fst-italic btn btn-danger mt-4" type="submit">Registrar</button>
            <a href="index.html" class="btn btn-info fw-bold fst-italic mt-3">volver</a>
            <a href="http://localhost/Jasith007/" class=" mt-3 btn btn-secondary fst-italic fw-bold ">volver a inicio</a>
        </form>
        <div class="text-center">
            
        </div>
    </div>
</body>

</html>