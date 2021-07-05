<?php
    //las php diferencia mayusculas de minuscalas
    //NO es nesesario especificar el tipo de variable
    
    //esta almacena numeros
    $edad = 11;

    //esta almacena texto
    $nombre ='Jasith';
    
    //esta es de tipo buleano
    $vivo=true;

    //esta es de tipo Array
    $animales=["Perro","Gato","Elefante"];

    //Para que aparesca algo en pantalla
    //PHP puede leer las etiquetas de HTML cuando estan entre comillas

    //si utilizas las comillas simples tendras que concatenar con un punto las variables con el texto
    echo $nombre . ' tiene ' . $edad . ' años </br>';
    //si utilizas las comillas dobles no es nesesario concatenar
    echo "$nombre tiene $edad años </br>"
    //si intentas colocar variables y texto dentro de comillas simpples no te lo leera correctamente lo escrito
    echo ''
?>