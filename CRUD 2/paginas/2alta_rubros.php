<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta</title>
</head>
<body bgcolor="white">
	<h1 align="center">Ver Rubros</h1>
	<?php 
		$mysql = new mysqli("localhost", "root", "", "base2");
		if ($mysql->connect_error) {
			die('Problemas a la conexión a la base de datos');
		}
		
		$mysql-> query("insert into rubros(descripcion) VALUES ( '$_REQUEST[descripcion]')") or die($mysql->error);
		
		$mysql->close();

		echo "<center>El nuevo rubro se almaceno</center>";
	 ?>
	 <br>
	 <table border="1" bgcolor="#CD6155" align="center">
	 	<tr>
	 		<td><a href="1rubros.html">
	 		<input type="button" value="Regresar"></a></td>
	 	</tr>
	 </table>
</body>
</html>