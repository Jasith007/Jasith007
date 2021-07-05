<?php

include_once 'conexion.php';

//echo password_hash("bluuwed", PASSWORD_DEFAULT).'\n';

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];
 
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);  
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

var_dump($resultado);

if($resultado){
    echo '</br>Ya existe este usuario';
    die();
}



$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);

echo '</pre>';

//VERIFICAR CONTRASEÑA
if(password_verify($contrasena2, $contrasena)) {
    echo '¡La contraseña es valida!';

    //AGREGAR A LA BASE DE DATOS
    include_once 'conexion.php';

    $sql_agregar='INSERT INTO  usuarios(nombre,contrasena,contrasena2) VALUES(?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar); 

    if($sentencia_agregar->execute(array($usuario_nuevo,$contrasena,$contrasena2))){
        echo 'Su usuario a sido registrado exitosamente';
    }

} else {
   echo 'La contraseña no es valida';
}