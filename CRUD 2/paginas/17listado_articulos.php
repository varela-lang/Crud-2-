<!-- Sergio Varela -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de artículos</title>
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
	<h1 align="center">Listado de Artículos</h1>

  <?php
  $mysql = new mysqli("localhost", "root", "", "base2");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select ar.codigo as codigoart,
                                     ar.descripcion as descripcionart,
                                     precio,
                                     ru.descripcion as descripcionrub 
                                  from articulos as ar
                                  inner join rubros as ru on ru.codigo=ar.codigorubro") or
    die($mysql->error);

  echo '<table class="tablalistado">';
  echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['codigoart'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionart'];
    echo '</td>';
    echo '<td>';
    echo $reg['precio'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionrub'];
    echo '</td>';
    echo '</tr>';
  }
  echo '<table>';

  $mysql->close();

  ?>
  <br>
  <table border="1" bgcolor="#A1DEA" align="center">
  	<tr align="center">
  		<td>
  			<a href="11alta_articulos.php">
  				<input type="button" value="Alta de Artículos">
  			</a>
  		</td>
  		<td><a href="13consulta_articulos.html">
  			<input type="button" value="Consulta de Artículos">
  		</a></td>
  	</tr>
  	<tr align="center">
  		<td>
  			<a href="15borrado_articulos.html">
  				<input type="button" value="Borrado de Artículos">
  			</a>
  		</td>
  		<td><a href="18modificar_articulos.html">
  			<input type="button" value="Modificación de Artículos">
  		</a></td>
  	</tr>
    <tr align="center">
			 <td colspan="4"><a href="principal.html"><input type="button" value="Regresar"></a></td>
		 </tr>
  </table>


</body>

</html>