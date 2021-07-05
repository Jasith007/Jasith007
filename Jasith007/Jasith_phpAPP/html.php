<?php

    $nombre='Jasith';
    $animales=["Perro","Gato","Elefante","Jirafa"];
  //  $animales=array("Perro","Gato","Elefante","Jirafa");

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divice-width, initial-scale=1, shrink-to-fit-no">
    </head>
    <body>

        <!-- Puedes mesclar codigo HTML con codigo PHP -->
        <h1>Hola <?php echo $nombre?></h1>
        
        <?php
            $i=0;

            while($i<=2){
                echo "<h1>Mi animal favorito es $animales[$i] </h1>";
                $i++;
            }
        ?>
      
    </body>
</html>