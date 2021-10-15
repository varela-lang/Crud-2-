<!-- Sergio Varela -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de articulos</title>
</head>
<body bgcolor="white">
    <h1 align="center">Alta de articulos</h1>
    <form action="26panel_agregar_alta.php" method="POST">
        <table border="1" bgcolor="#F4D03F" align="center">
            <tr>
                <td>Ingresa descripcion del articulo:</td>
                <td><input type="text" name="descripcion" required></td>
            </tr>
            <tr>
                <td>Ingresa precio:</td>
                <td><input type="text" name="precio" required></td>
            </tr>
            <tr>
                <td>Seleccione rubro:</td>
                <td><select name="codigorubro">
                    <?php 
                    $mysql = new mysqli("localhost", "root", "","base2");
                    if ($mysql->connect_error) {
                       die("Problemas con la conexion a la base de datos");
                    }

                    $registros = $mysql->query("select codigo, descripcion from rubros") or die ($mysql->error);
                    while ($reg=$registros->fetch_array()) {
                        echo "<option value=\"".$reg['codigo'],"\">".$reg['descripcion']."</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr aling="center">
                <td colspan="2" align="center"><input type="submit" value="Confirmar"></td>
            </tr>
        </table>
    </form>
</body>
</html>