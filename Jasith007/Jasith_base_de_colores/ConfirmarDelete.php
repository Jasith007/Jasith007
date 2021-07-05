<?php
include_once 'conexion.php';

//LEER
$sql_leer = 'SELECT * FROM colores';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchALL();
//var_dump($resultado);

//AGREGAR
if ($_POST) {
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];

    $sql_agregar = 'INSERT INTO colores (color,descripcion) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($color, $descripcion));
    //cerramos base de datos y centencia
    $sentencia_agregar = null;
    $pdo = null;
    //recargamos la pajina para que aparesca lo ingresado
    header('location:index.php');
}

if ($_GET) {
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM colores WHERE id=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($id));
    $resultado_unico = $gsent_unico->fetch();

    //var_dump($resultado_unico);
    $gsent_unico = null;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .amarillo {
            color: rgb(226, 255, 59);
        }
    </style>
    <title>Delete Confirm</title>
</head>

<body class="">
    <br>
    <div class="bg-dark text-center container rounded shadow-lg">
        <div class="row">


            <h2 class="amarillo">¿Estas Seguro que quieres eliminar <?php echo $resultado_unico['color']; ?> permanentemente?</h2>

            <div class="col-3"></div>
            <!-- Etiqueta de el Color de referencia(Inicia) -->

            <div class=" col-6 alert alert-<?php echo $resultado_unico['color'] ?> 
          text-uppercase fw-bold fst-italic text-center " role="alert">



            <!-- puntito de color -->
            <a class="btn <?php echo $resultado_unico['color'] == 'dark' ? 'btn-light' : 'btn-dark' ?>" type="button" disabled>
              <span class=" spinner-grow spinner-grow-sm text-<?php echo $resultado_unico['color'] ?>" role="status"></span>
            </a>

            <!-- con esto puedes ver el color de boostrap elegido -->
            <?php echo $resultado_unico['color'] ?>
            -
            <!-- con esto puedes ver la descripcion colocada -->
            <?php echo $resultado_unico['descripcion'] ?>

            <!-- Esto te dice el color -->

            <span class="badge  <?php echo $resultado_unico['color'] == 'light' ? 'text-dark fw-bold fst-italic' : '' ?> bg-<?php echo $resultado_unico['color'] ?>">
              <?php echo $resultado_unico['color'] ?>
            </span>


            <a class="float-en">
              <img src="delete.png" alt="" width=34px height=34px></i>
            </a>

            <a  class="float-en">
              <img src="lapisitoDeEdit.png" alt="" width=40px height=40px></i>
            </a>

          </div>

            <!-- Etiqueta de color de referencia(Termina) -->
            <div class="col"></div>


        </div>
        <a href="index.php" class="btn btn-danger mt-5">-----------------no-----------------</a>
        <a href="delete.php?id=<?php echo $resultado_unico['id'] ?>" class="btn btn-success mt-5">-----------------si-----------------</a>
        <br>
        <br>
</body>

</html>