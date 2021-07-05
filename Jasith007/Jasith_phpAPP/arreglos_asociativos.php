<?php
    //$ciudad=['Valdivia','Puerto Varas];
    $hola=[2, 3, 4];
    $ciudad[0]=[
        'nombre'=>'Valdivia',
        'poblacion'=>100
    ];
    $ciudad[1]=[
        'nombre'=>'Puerto Varas',
        'poblacion'=>35
    ];

    $ciudad[2]=[
        'nombre' => 'Monte Video',
        'poblacion' =>40
    ];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divice-width, initial-scale=1, shrink-to-fit-no">
    </head>
    <body>
        <h1>Ciudades</h1>
        <hr>
        <?php 
            /*for($i=0;$i<=1;$i++){
                echo '<h2> Nombre: ' . $ciudad[$i]['nombre'] . '</h2></br>';
                echo '<h2> Poblacion: ' . $ciudad[$i]['poblacion'] . '</h2>';
                echo "<hr>";
            }*/

            foreach($ciudad as $valor){
                echo '<h2> Nombre: ' . $valor['nombre'] . '</h2></br>';
                echo '<h2> Poblacion: ' . $valor['poblacion'] . '</h2>';
                echo "<hr>";
            }
        ?>
    </body>
</html>