<!DOCTYPE html>
<html>
<head>
	<title>Alta de Articulos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="white">
	<h1 align="center">Alta de articulos</h1>
	<form action="12resultado_articulos.php" method="post">
		<table border="1" bgcolor="#F4DO3F" align="center">
			<tr>
				<td>Ingrese descripcion del articulo:</td>
				<td><input type="text" name="descripcion" required></td>
			</tr>
			<tr>
				<td>Ingrese precios:</td>
				<td><input type="text" name="precio" required></td>
			</tr>
			<tr>
				<td>Seleccione rubro:</td>
				<td><select name="codigorubro">
					<?php 
					$mysql = new mysqli("localhost", "root", "", "base2");

					if ($mysql->connect_error) {
						die("Problemas con la conexion a la base de datos");
					}

					$registros = $mysql->query("select codigo,descripcion from rubros") or die($mysql->error);
					while ($reg = $registros->fetch_array()) {
						echo "<option value=\"". $reg["codigo"]."\">" . $reg["descripcion"]. "</option>";
					}
					 ?> 	
					 </select></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" value="Confirmar"></td>
			</tr>
		</table>
	</form>
	<br>
	<table border="1" bgcolor="#F4DO3F" align="center">
		<tr align="center">
			<td><a href="13consulta_articulos.html"><input type="button" value="Consulta de Articulos"></a></td>
			<td><a href="15borrado_articulos.html"><input type="button" value="Borrado de Articulos"></a></td>
		</tr>
		<tr align="center">
			<td><a href="17listado_articulos.php"><input type="button" value="Listado de Articulos"></a></td>
			<td><a href="18modificar_articulos.html"><input type="button" value="Modificacion de Articulos"></a></td>
		</tr>
		<tr align="center">
			 <td colspan="4"><a href="principal.html"><input type="button" value="Regresar"></a></td>
		 </tr>
	</table>
</body>
</html>