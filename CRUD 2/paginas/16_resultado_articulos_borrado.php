<!-- Sergio Varela -->
<!DOCTYPE html>
<html>
<head>
	<title>Borrado de Articulos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="REFRESH" content="10; URL=15borrado_articulos.html">
</head>
<body bgcolor="white">
	<h1 align="center">Borrado de Articulos</h1>
	<?php 
	$mysql = new mysqli("localhost", "root", "", "base2");
	if ($mysql->connect_error) {
		die("Problemas con la conexion de datos");
	}

	$registro=$mysql->query("SELECT descripcion FROM articulos where codigo=$_REQUEST[codigo]") or die ($mysql->error);

	if ($reg=$registro->fetch_array()) {
		$mysql->query("DELETE FROM articulos WHERE codigo=$_REQUEST[codigo]") or die ($mysql->error);
		echo "<center>La descripcion del articulo que se elemino es: ".$reg["descripcion"]."</center>";
	} else{
		echo "<center>No existe un articulo con dicho codigo</center>";
	}

	$mysql->close();
	 ?>
	 <br>
	 <table border="1" bgcolor="#EC7063" align="center">
	 	<tr>
	 		<td><a href="15borrado_articulos.html"><input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>
</body>
</html>