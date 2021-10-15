<!-- Sergio Varela -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado</title>
	<style>
		.tablalistado {
			border-collapse: collapse;
			box-shadow: 0px 0px 8px #000;
			margin: 20px;
			margin: auto;
		}
		.tablalistado th {
			border: 1px solid #000;
			padding: 5px;
			background-color: #ffd040;
		}
		.tablalistado td {
			border: 1px solid #000;
			padding: 5px;
			background-color: #ffdd73;
		}
	</style>
</head>
<body bgcolor="white">
	<h1 align="center">Listado</h1>
	<?php 
		$mysql = new mysqli("localhost", "root", "", "base2");
		if ($mysql->connect_error) {
			die("Problemas con la conexión a la base de datos");
		}

		$registros = $mysql->query('select codigo,descripcion from rubros') or die($mysql->error);

		echo '<table class="tablalistado" align="center">';
		echo '<tr><th>Código</th><th>Descripción</th></tr>';
		while($reg = $registros->fetch_array()) {
			echo "<tr aling=´center´><td>$reg[codigo]</td><td>$reg[descripcion]</td></tr>";
		}
		echo "</table>";
		$mysql->close();
	 ?>
	 <br>
	 <table border="1" bgcolor="#AF7AC5" align="center">
	 	<tr align="center">
	 		<td>
	 			<a href="1rubros.html">
	 			<input type="button" value="Alta de Rubros"></a>
	 		</td>
	 		<td><a href="4consultas_rubros.html">
	 		<input type="button" value="Consulta de Rubros"></a></td>
	 	</tr>
	 	<tr align="center">
	 		<td>
	 			<a href="6modificar_rubros.html">
	 			<input type="button" value="Modificación de Rubros"></a>
	 		</td>
	 		<td><a href="9borrado_rubros.html">
	 		<input type="button" value="Borrador de Rubros"></a></td>
	 	</tr>
		 <tr align="center">
			 <td colspan="4"><a href="principal.html"><input type="button" value="Regresar"></a></td>
		 </tr>
	 </table>
</body>
</html>