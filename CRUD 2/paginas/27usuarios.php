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
	<h1 align="center">Listado</h1>

  <?php
  $mysql = new mysqli("localhost", "root", "", "base2");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $registros = $mysql->query("select id, usuario from usuarios") or
    die($mysql->error);

  echo '<table class="tablalistado">';
  echo '<tr><th>Código</th><th>Usuario</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['id'];
    echo '</td>';
    echo '<td>';
    echo $reg['usuario'];
    echo '</td>';
    echo '</tr>';
  }
  $mysql->close();
  ?>
  <br>
  <table>
  <tr align="center">
			 <td colspan="4"><a href="principal.html"><input type="button" value="Regresar"></a></td>
		 </tr>
  </table>
</body>
</html>