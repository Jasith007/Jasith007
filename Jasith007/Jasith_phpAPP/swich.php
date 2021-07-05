<?php
    $eleccion='Helado';
    switch($eleccion){
        case 'Pizza':
            echo '<h3>El precio de la Pizza es de 12 balboas</h3>';
        break;
//___________________________________________________________
        case 'Helado':
            echo '<h3>El precio de la Helado es de un balboa</h3>';
        break;
//___________________________________________________________
        case 'Torta':
            echo '<h3>El precio de la Torta es de 20 balboas</h3>';
        break;
    }
    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divice-width, initial-scale=1, shrink-to-fit-no">
        <style>
            .boton1{
                background:Red;
            }
            .boton2{
                background:Orange;
            }
            .boton3{
                background:Black;
                color:white;
            }
            .shuriquen{
                clip-path: polygon(33% 34%, 50% 0, 65% 33%, 100% 50%, 64% 64%, 50% 100%, 34% 64%, 0 48%);
            }
        </style>
    </head>
    <body>
        <h1>Ingresa una opcion:</h1>
        <hr>
        <h2 class="boton1">1)Pizza</h2>
        <h2 class="boton2">2)Helado</h2>
        <h2 class="boton3">3)Torta</h2>

        <img src="naruto.jpg" width="370" height="300">
    </body>
</html>