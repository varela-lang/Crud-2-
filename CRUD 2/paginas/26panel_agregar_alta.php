<!-- Sergio Varela -->
<?php 
     $mysql=new mysqli("localhost", "root", "","base2");

	 $precio1= $_REQUEST["$precio"];
	 $desc1= $_REQUEST["$descripcion"];
	 $codigo1= $_REQUEST["$codigorubro"];


		if ($mysql->connect_error){
			die("Problemas con la conexión a la base de datos");
        
        }
		
		$mysql->query("INSERT INTO articulos(descripcion, precio, codigorubro)
			VALUES ('$_REQUEST[descripcion]', '$_REQUEST[precio]', '$_REQUEST[codigorubro]')") or 
		die($mysql->error);

		$mysql->close();

     header('Location:21panel_listado.php');
?>