<?php
session_start();
echo '<div>';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head >
<body class="bg-primary text-center ">
    <div>
    <container class="center">
    <?php for($i=0;$i<=3;$i++){?>
    <p>
    <a href="protegido.php" class="btn btn-dark center mt-0">boton de for :)</a>
    <a href="protegido" class="btn btn-danger center mt-0">boton de for :)</a>
    <a href="protegido.php" class="btn btn-success center mt-0">boton de for :)</a>
    </p>
    <?php } ?>
    </container>
    </div>
</body>
</html>