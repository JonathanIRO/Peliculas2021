<?php
    $servidor="localhost";
    $nombreBD="movies";
    $usuario="root";
    $pass="";

    $conexion = new mysqli($servidor,$usuario,$pass,$nombreBD);
    if($conexion -> connect_error){
          die("No se pudo conectar");
    }else{
        header ("location: /Peliculas2021/index.php");
    }
?>