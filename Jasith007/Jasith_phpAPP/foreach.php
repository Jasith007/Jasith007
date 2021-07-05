<?php
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
        <?php
            //for es muy facil de usar solo que si no sabes
            //cuantos elementos hay que recorrer se hace un problema

            //echo "<h1>Mi animal favorito es $animales[$i] </h1>";
            echo '</br></br><h1>for </h1></br>';            
            for($i=0;$i<=2;$i++){
                echo "<h1>Mi animal favorito es $animales[$i] </h1>";
            }
            echo '</br></br><h1><hr></h1></br>';
            echo '</br></br><h1>foreach</h1></br>';
            //con foreach
            foreach($animales as $valor){
                echo "<h1>Mi animal favorito es $animales[$i] </h1>";
            }
        ?>
    </body>
</html>