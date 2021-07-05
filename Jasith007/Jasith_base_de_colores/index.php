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

<!doctype html>
<html lang="en">

<head>
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
  <title>GUARDADADO DE COLORES</title>
  <link href="icono.png" rel="icon">
</head>

<body class="bg-transparent">

  <div class="container bg-dark mt-5 rounded shadow-lg">
    <br>
    <br>
    <div class="row">

      <!-- Lista de colores agregados (Empiesa) -->
      <div class="cold-md-6 col align-self-center">
        <?php foreach ($resultado as $dato) : ?>


          <div class="alert alert-<?php echo $dato['color'] ?> 
          text-uppercase fw-bold fst-italic text-center " role="alert">



            <!-- puntito de color -->
            <a class="btn <?php echo $dato['color'] == 'dark' ? 'btn-light' : 'btn-dark' ?>" type="button" disabled>
              <span class=" spinner-grow spinner-grow-sm text-<?php echo $dato['color'] ?>" role="status"></span>
            </a>

            <!-- con esto puedes ver el color de boostrap elegido -->
            <?php echo $dato['color'] ?>
            -
            <!-- con esto puedes ver la descripcion colocada -->
            <?php echo $dato['descripcion'] ?>

            <!-- Esto te dice el color -->

            <span class="badge  <?php echo $dato['color'] == 'light' ? 'text-dark fw-bold fst-italic' : '' ?> bg-<?php echo $dato['color'] ?>">
              <?php echo $dato['color'] ?>
            </span>


            <a href="ConfirmarDelete.php?id=<?php echo $dato['id'] ?>" class="float-en">
              <img src="delete.png" alt="" width=34px height=34px></i>
            </a>

            <a href="indexEdit.php?id=<?php echo $dato['id'] ?>" class="float-en">
              <img src="descarga.png" alt="" width=40px height=40px></i>
            </a>

          </div>

        <?php endforeach ?>

      </div>

      <!-- Lista de colores agregados (Termina) -->

      <!-- Campos de Texto para agregar (Empiesa) -->
      <div class="cold-md-6 col">
        <?php if (!$_GET) : ?>

          <h2 class="amarillo">AGREGAR ELEMENTOS</h2>
          <form method="POST">

            <!-- Aqui se agrega el color -->
            <input type="text" placeholder="one color with boostrap" class="text-lowercase form-control " name="color">

            <!-- Aqui se agrega una descripcion -->
            <input type="text" placeholder="description" caracter class="form-control text-lowercase mt-3" name="descripcion">

            <!-- Con este boton registras lo insertado -->
            <button class="btn btn-success mt-3">Agregar</button>
            <!-- volver a inicio -->
            <a href="http://localhost/Jasith007/" class=" mt-3 btn btn-secondary fst-italic fw-bold ">volver a inicio</a>
            
          </form>

          <div class="mt-3">

          <h2 class="amarillo">AGREGAR ELEMENTOS</h2>
          <button class="btn btn-danger">danger</button>
          <button class="btn btn-warning">warning</button>
          <button class="btn btn-primary">primary</button>
          <button class="btn btn-info">info</button>
          <button class="btn btn-success">success</button>
          <button class="btn btn-light">light</button>
          <button class="btn btn-seccondary">secondary</button>
          <div cass="bg-transparet">
          <button class="btn btn-dark shadow-lg ">dark</button>
          </div>
          </div>
        <?php endif ?>

      </div>

      <!-- Campos de Texto para agregar (Termina) -->


      <?php if ($_GET) : ?>
        <?php header('Location:indexEdit.php') ?>
      <?php endif ?>


      <br>
      <br>
    </div>

    <br>
  </div>

  <div class="container bg-dark shadow-lg text-center">

  </div>

</body>

</html>

<?php

//cerramos conexion de base de datos y sentencia

$pdo = null;
$gsent = null;

?>