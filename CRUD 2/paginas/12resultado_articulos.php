<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="" content="10; URL=11alta_articulos.php">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta de Articulos</title>
</head>
<body bgcolor="white">
	<h1 align="center">Alta de articulos</h1>
	<?php 
		$mysql = new mysqli("localhost", "root", "", "base2");
		if ($mysql->connect_error)
			die("Problemas con la conexión a la base de datos");

		$mysql->query("INSERT INTO articulos(descripcion, precio, codigorubro)
			VALUES ('$_REQUEST[descripcion]', '$_REQUEST[precio]', '$_REQUEST[codigorubro]')") or 
		die($mysql->error);

		echo "<center>El nuevo articulo se almacenó</center>";

		$mysql->close();
	 ?>
	 <br>
	 <table border="1" bgcolor="F0DB0F" align="center">
	 	<tr>
	 		<td><a href="11alta_articulos.php">
	 		<input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>
</body>
</html>