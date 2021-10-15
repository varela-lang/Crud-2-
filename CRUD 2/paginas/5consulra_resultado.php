<!-- Sergio Varela -->
<!DOCTYPE html>
<html>
<head>
	<title>Consultas de Rubros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="white">
	<h1 align="center">Resultado de Consulta</h1>
	<?php 
	$mysql = new mysqli("localhost", "root", "", "base2");
	if ($mysql->connect_error){
		die("problemas con la conexion a la base de datos");
	}

	$registros = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or die($mysql->error);

	if ($reg = $registros->fetch_array()) {
		echo "<center>La descripcion del rubro es: " . $reg["descripcion"]."<center><br>";
	} else{
		echo "<center> No existe un rubro con dicho codigo<center><br>";
	}

	$mysql->close();

	 ?>

	 <br>
	 <table border="1" bgcolor="#5499C7" align="center">
	 	<tr>
			<td><a href="4consultas_rubros.html"><input type="button" value="Regresar"></a></td>
	 		
	 </table>

</body>
</html>