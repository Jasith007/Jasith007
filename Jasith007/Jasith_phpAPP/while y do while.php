<?php

    //Bucle While
    
    $i=1;
    //primero la condicion la cual esta en el while
    //y luego la accion
    while($i<=10){
        echo $i.'</br>';
        $i++; /*$i= $i+1;*/
    }

    echo "</br> Fin del bucle while </br></br></br></br>";
//-------------------------------------
    //Bucle Do while
    $i=10;
    //Primero la accion y
    //luego la condicion para continuar
    do{
        echo $i.'</br>';
        $i--; /*$i= $i-1;*/
    }
    while($i>0);

    echo "</br> Fin del bucle do while </br></br></br></br>";
?>