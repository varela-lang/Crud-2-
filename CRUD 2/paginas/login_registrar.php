<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "base2";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$conn)
	{
		die("No hay conexion:".mysqli_connect_error());
	}

	$nombre = $_POST["usuario"];
	$pass = $_POST["contra"];


	//login
	if(isset($_POST["btningresar"]))
	{
		$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$nombre' AND contra= '$pass'");
		$nr = mysqli_num_rows($query);

		if($nr==1)
	{
		echo "<script> alert('Bienvenido. $nombre'); window.location='principal.html' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='../index.html' <script>";
	}
	}

	//registrar
	if(isset($_POST["btnregistrar"]))
	{
		$sqlgrabar = "INSERT INTO `usuarios` (`id`, `usuario`, `contra`) VALUES (NULL, '$nombre', '$pass')";

		if(mysqli_query($conn,$sqlgrabar))
		{
		echo "<script> alert('Usuario registrado con exito: $nombre')</script>";
		header ("Location:../index.html");
		}else
		{
			echo "Error: ".$sql."<br>".mysql_error($conn);
		}
	}

?>