<!DOCTYPE html>

<html>

<head>
    <meta charset="UFT-8">
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <title>Mejores peliculas en el 2021</title>
</head>

<body>
    <div class="container">
        <form action="PHP/consulta.php" method="post" name="form">
            <table width="200" borde="0">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" placeholder="Movie name"></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input type="date" name="fecha" placeholder="Movie date"></td>
                </tr>
                <tr>
                    <td>Duracion</td>
                    <td><input type="int" name="duracion" placeholder="Movie time"></td>
                </tr>
                <tr>
                    <td>Popularidad</td>
                    <td><input type="int" name="popularidad" placeholder="Movie rate 0-10"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Insertar datos de pelicula"></td>
                    <td><input type="button" value="Index" onClick=" window.location.href='index.php' "></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>