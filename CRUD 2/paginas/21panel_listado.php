<!-- Sergio Varela -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <style>
    table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
    }

    th, td{
	padding: 20px;
    }

    thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
     } 

    tr:nth-child(even){
	background-color: #ddd;
    }

    tr:hover td{
	background-color: #369681;
	color: white;
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
  echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th><th>Borrar</th><th>Modificar</th></tr>';
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
    echo '<td>';
    echo '<a href="23panel_modificar.php?codigo='.$reg['codigoart'].'">¿Modificar?</a>';
    echo '</td>';
    echo '<td>';
    echo '<a href="22panel_baja.php?codigo='.$reg['codigoart'].'">¿Borrar?</a>';
    echo '</td>';
    echo '</tr>';
  }
  echo '<tr align="center">';
    echo '<td colspan="6">';
    echo '<a href="25panel_agregar.php">¿Agregar un nuevo articulo?</a>';
    echo '</td>';
  echo '</tr>';
  echo '<table>';

  $mysql->close();

  ?>
</body>
</html>