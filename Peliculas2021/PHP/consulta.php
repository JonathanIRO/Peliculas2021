<?php
    include("conexion.php");
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $duracion = $_POST["duracion"];
    $popularidad = $_POST["popularidad"];

    $consulta = "insert into datos (nombre, fecha, duracion, popularidad) values('$nombre','$fecha','$duracion','$popularidad')";
    $solicitud=$conexion->query($consulta);
?>