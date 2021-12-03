<!DOCTYPE html>

<html>

<head>
    <meta charset="UFT-8">
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <title>Mejores peliculas en el 2021</title>
</head>

<body>
    <div class="container">
        <form action="PHP/update.php" method="post" name="form">
            <table width="200" borde="5">
                <tr>
                    <td>Nombre_antiguo</td>
                    <td><input type="text" name="nombre" placeholder="Movie name"></td>
                </tr>
                <tr>
                    <td>Nombre_nuevo</td>
                    <td><input type="text" name="dnombre" placeholder="Movie name"></td>
                </tr>
                <tr>
                    <td>Fecha_antigua</td>
                    <td><input type="date" name="fecha" placeholder="Movie date"></td>
                </tr>
                <tr>
                    <td>Fecha_nueva</td>
                    <td><input type="date" name="dfecha" placeholder="Movie date"></td>
                </tr>
                <tr>
                    <td>Duracion_antigua</td>
                    <td><input type="int" name="duracion" placeholder="Movie time"></td>
                </tr>
                <tr>
                    <td>Duracion_nueva</td>
                    <td><input type="int" name="dduracion" placeholder="Movie time"></td>
                </tr>
                <tr>
                    <td>Popularidad_antigua</td>
                    <td><input type="int" name="popularidad" placeholder="Movie rate 0-10"></td>
                </tr>
                <tr>
                    <td>Popularidad_nueva</td>
                    <td><input type="int" name="dpopularidad" placeholder="Movie rate 0-10"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar datos de pelicula"></td>
                    <td><input type="button" value="Index" onClick=" window.location.href='index.php' "></td>
                    
                </tr>
            </table>
        </form>
    </div>
</body>

</html>