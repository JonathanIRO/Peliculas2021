<?php
    $servidor="sql-service";
    $nombreBD="movies";
    $usuario="jonathan";
    $pass="123456";

    $conexion = new mysqli($servidor,$usuario,$pass,$nombreBD);
    if($conexion -> connect_error){
          die("No se pudo conectar");
    }else{
        header ("location: /Peliculas2021/index.php");
    }
?>
