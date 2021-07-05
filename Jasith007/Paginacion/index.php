<?php include_once 'conexion.php';

$sql = 'SELECT * FROM articulos';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchALL();
//var_dump($resultado);

$articulos_x_pagina = 3;

// contar articulos de nuestra base de datos
$total_articulos_de_BBDD = $sentencia->rowCount();
//echo $total_articulos_de_BBDD;

$paginas = $total_articulos_de_BBDD / 3;
$paginas = ceil($paginas);
//echo $paginas;
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
     rel="stylesheet" crossorigin="anonymous" >
    <style>
        .amarillo {
            color: rgb(226, 255, 59);
        }

        .celeste {
            color: rgb(59, 255, 219);
        }

        .rojo {
            color: rgb(255, 59, 59);
        }

        .azul {
            color: rgb(85, 59, 255);
        }

        .rosa {
            color: rgb(255, 59, 206);
        }
    </style>


    <title>Paginacion</title>
</head>

<body class="container mt-5 bg-dark">
    <div class="margin-button-5 container">
        <h1 class="amarillo text-center mb-5">Paginacion</h1>

        <?php 
        if(!$_GET){
            header('Location:index.php?pagina=1');
        }

        if($_GET['pagina']>$paginas){
            header('Location:index.php?pagina='.$paginas);
        }

        if($_GET['pagina']<1){
            header('Location:index.php?pagina=1');
        }

        $iniciar=($_GET['pagina']-1)*$articulos_x_pagina;

        $sql_articulos='SELECT * FROM articulos LIMIT :iniciar,:narticulos';
        $sentencia_articulos=$pdo->prepare($sql_articulos);
        $sentencia_articulos->bindParam(':iniciar',$iniciar,PDO::PARAM_INT);
        $sentencia_articulos->bindParam(':narticulos',$articulos_x_pagina,PDO::PARAM_INT);
        $sentencia_articulos->execute();

        $resultado_articulos=$sentencia_articulos->fetchAll();
        ?>
        <?php foreach ($resultado_articulos as $articulo) : ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $articulo['titulo'] ?>
            </div>
        <?php endforeach ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">

                <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link " href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">Previous</a>
                </li>


                <?php for ($i = 0; $i < $paginas; $i++) : ?>
                    <li class="page-item
                    <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>
                    ">
                        <a class="page-link " href="index.php?pagina=<?php echo $i + 1; ?>">
                            <?php echo $i + 1 ?>
                        </a>
                    </li>
                <?php endfor ?>


                <li class="page-item <?php echo $_GET['pagina']>=$paginas? 'disabled' : '' ?>">
                    <a class="page-link" 
                    href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">
                    Next</a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>