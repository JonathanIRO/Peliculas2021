<!DOCTYPE html>

<html>

<head>
    <meta charset="UFT-8">
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <title>Mejores peliculas en el 2021</title>
</head>

<body>
    <div class="container">
        <form action="PHP/delete.php" method="post" name="form">
            <table width="200" length="150" borde="10">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" placeholder="Movie name"></td>
                <tr>
                    <td><input type="submit" value="Eliminar datos de pelicula"></td>
                    <td><input type="button" value="Index" onClick=" window.location.href='index.php' "></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>