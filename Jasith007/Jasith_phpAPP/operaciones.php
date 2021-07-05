<?php
    $a=3;
    $b=4;
    $z=5;

    echo "</br>condiciones</br>";
    // && si ambas condiciones se cumplen es TRUE
    // pero si solo se cumple una o ninguna es FALSE
    if($z>$b && $z>$b){
        echo '</br> Es Verdad </br>';
    }else{
        echo '</br> Es mentira </br>';
    }

    // || es que si si cumple una o 2 condiciones TRUE
    // pero si no se cumple ninfuna condicion es FALSE
    if($a>$b || $b>$a){
        echo 'Es Verdad </br>';
    }else{
        echo 'Es mentira </br>';
    }
    //-----------------------------------------------------
    
    echo "</br>operaciones matematicas</br>";
    $a=4;
    $b=5;
    $c;
    
    //con + sumas 
    //tambien puedes usar $variable++; para sumare 1 a la variable

    echo '';
    $c=$b+$a;
    echo "</br> $b+$a=$c </br>";

    //con - restas
    //tambien puedes usar $variable--; para restarle 1 a la variable  

    $c=$b-$a;
    echo "</br> $b-$a=$c </br>";

    //con * multiplicas
    $c=$b*$a;
    echo "</br> $b x $a=$c </br>";

    //con / divides
    $c=$b/$a;
    echo "</br> $b ÷ $a=$c </br>";

?>