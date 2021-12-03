<?php
    include("conexion.php");
    $nombre = $_POST["nombre"];

    $eliminar = "DELETE FROM datos WHERE nombre = '$nombre' ";
    $solicitud=$conexion->query($eliminar);

?>