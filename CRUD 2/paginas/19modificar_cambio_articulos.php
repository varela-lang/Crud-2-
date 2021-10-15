<!-- Sergio Varela -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Articulos</title>
</head>
<body bgcolor="white">
    <h1 align="center">Modificar Articulos</h1>
    <?php 
   $mysql = new mysqli("localhost", "root", "", "base2");
   if ($mysql -> connect_error) {
       die("Problemas con la conexion a la base de datos");
   }

   $registro=$mysql->query("SELECT descripcion, precio, codigorubro from articulos where codigo=$_REQUEST[codigo]") or die($mysql->error);

   if($reg = $registro->fetch_array()){
    ?>
    <form action="20modificar_alta_articulos.php" method="POST">
        <table border="1" bgcolor="#5DADE2" align="center">
            <tr>
                <td>Descripcion del articulo:</td>
                <td><input type="text" name="descripcion" size="50" value="<?php echo $reg["descripcion"]; ?>"></td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td><input type="text" name="precio" size="10" value="<?php echo $reg["precio"]; ?>"></td>
            </tr>
            <tr>
                <td>Rubro:</td>
                <td><select name="codigorubro">
                <?php
            $registros2 = $mysql->query("select codigo,descripcion from rubros") or
            die($mysql->error);
             while ($reg2 = $registros2->fetch_array()) {
            if ($reg2['codigo'] == $reg['codigorubro'])
              echo "<option value=\"" . $reg2['codigo'] . "\" selected>" . $reg2['descripcion'] . "</option>";
            else
              echo "<option value=\"" . $reg2['codigo'] . "\">" . $reg2['descripcion'] . "</option>";
          }
          ?>
                </select><input type="hidden" name="codigo" value="<?php echo $_REQUEST["codigo"];?>"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Confirmar"></td>
            </tr> 
        </table>
    </form>
    <?php
   } else{
       echo "<center>No existe un articulo con dicho codigo</center>";

       $mysql->close();
   }
   ?>
   <br>
	      <table border="1" bgcolor="#48C9B0" align="center">
	 	  <tr align="center">
	 	  <td><a href="11alta_articulos.php"><input type="button" value="Alta de Articulos"></a></td>
          <td><a href="13consulta_articulos.html"><input type="button" value="Consulta de Articulos"></a></td>
	 	  </tr>
          <tr align="center">
	 	  <td><a href="15borrado_articulos.html"><input type="button" value="Borrado de Articulos"></a></td>
          <td><a href="17listado_articulos.php"><input type="button" value="Listado de Articulos"></a></td>
	 	  </tr>
	      </table>
</body>
</html>