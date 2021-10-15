<!-- Sergio Varela -->
<html>
    <head>
        <title>Modificacion de Rubros</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body bgcolor="white">
        <h1 align="center"> Modificacion de rubros</h1>
        <?php 
        $mysql = new mysqli("localhost", "root", "", "base2");
        if ($mysql-> connect_error) {
        	die("Problemas con la conexion a la base de datos");
        }
        $registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or die ($mysql->error);
        if ($reg = $registro->fetch_array()) {
         ?>
         <form method="post" action="8modificar_alta.php">
         	<table border="1" bgcolor="#48C9B0" align="center">
         		<tr>
         			<td>Descripcion del rubro:</td>
         			<td><input type="text" name="descripcion" size="50" value="<?php echo $reg["descripcion"]; ?>"><input type="hidden" name="codigo" value="<?php echo$_REQUEST["codigo"]; ?>"></td>
         		</tr>

         		<tr align="center">
         			<td><a href="6modificar_rubros.html"><input type="button" value="Regresar"></a></td>
                     <td><input type="submit" value="Confirmar"></td>
         		</tr>	
         	</table>
         </form>
         <?php 
        } else{
        	echo "<center>No existe un rubro con dicho codigo</center>";
        	$mysql->close();
        }
          ?>
          <br>
	 <table border="1" bgcolor="#48C9B0" align="center">
	 	<tr>
	 		<td><a href="6modificar_rubros.html">
	 		<input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>
    </body>
</html>