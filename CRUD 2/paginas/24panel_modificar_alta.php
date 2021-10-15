<!-- Sergio Varela -->
<?php 
    $mysql= new mysqli("localhost", "root","","base2");

    if ($mysql->connect_error){
        die("Problemas con la conexion a la base de datos");
    }

    $mysql->query("UPDATE articulos set descripcion='$_REQUEST[descripcion]', precio='$_REQUEST[precio]', codigorubro='$_REQUEST[codigorubro]'
     where codigo='$_REQUEST[codigo]'") or die($mysql->error);

    echo '<alert>Se modifico la descripcion del rubro </alert>';
    
    $mysql->close();

    header("Location:21panel_listado.php");
?>