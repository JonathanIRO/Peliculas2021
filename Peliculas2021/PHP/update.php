<?php
    include("conexion.php");
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $duracion = $_POST["duracion"];
    $popularidad = $_POST["popularidad"];

    $dnombre = $_POST["dnombre"];
    $dfecha = $_POST["dfecha"];
    $dduracion = $_POST["dduracion"];
    $dpopularidad = $_POST["dpopularidad"];

    $actualizar1 = "UPDATE datos set nombre = '$dnombre' where nombre ='$nombre' ";
    $solicitud1=$conexion->query($actualizar1);

    $actualizar2 = "UPDATE datos set nombre = '$dfecha' where nombre ='$fecha' ";
    $solicitud2=$conexion->query($actualizar2);

    $actualizar3 = "UPDATE datos set nombre = '$dduracion' where nombre ='$duracion' ";
    $solicitud4=$conexion->query($actualizar3);

    $actualizar4 = "UPDATE datos set nombre = '$dpopularidad' where nombre ='$popularidad' ";
    $solicitud4=$conexion->query($actualizar4);
?>