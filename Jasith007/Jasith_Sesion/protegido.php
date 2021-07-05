<?php
    session_start();
echo '<div class="text-center mt-5">';
    if(isset($_SESSION['admin'])) {
        echo '<h1>Bienvenido 😊🤪🐦</h1>';
        echo ' 
        <br><br>
        <a class="btn btn-danger mt-5" href="CerrarSesion.php">Cerrar Sesion</a>
        <a class="btn btn-dark mt-5" href="index.php">Volver a pagina principal</a>
        
        <div class="text-center">
            <a class="btn btn-info mt-5" href="ffs.php">contenido :v</a>
            <a href="http://localhost/Jasith007/" class=" mt-3 btn btn-secondary fst-italic fw-bold ">volver a inicio</a>
        </div>
        ';
      
    }else{
        header('Location:index.php');
    }
    echo '<div>';
    ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous">
   
   