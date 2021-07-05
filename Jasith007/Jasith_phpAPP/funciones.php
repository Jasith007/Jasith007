<?php
//con function creas una funcion :v
    function lorem(){//en las llabes colocas lo que aga la funcion
        /*con return imprimes en pantalla lo que quieres
        imprimir */
        return '<p>
        Lorem ipsum dolor, sit amet 
        consectetur adipisicing elit. Placeat suscipit 
        adipisci delectus. Cupiditate ab consequatur 
        nisi commodi? Officia, eveniet? Atque ullam 
        dolores in, vel dicta totam numquam beatae iure.</p>';}

        function promedio($n1,$n2){
            return ($n1+$n2)/2;
        }

        echo promedio(10,20)
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divice-width, initial-scale=1, shrink-to-fit-no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <section>
            <p>
            //lo puedes usar las funciones para ahorrarte tiempo
            //y lineas de codigo
               <?php echo lorem(); ?>
            </p>
        </section>
        <footer>
            <h1>Todos los derechos reservados <?php echo date("Y");?></h1>
        </footer>
    </body>
</html>