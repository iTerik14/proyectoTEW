<?php 
    require('conexion.php');
    $query="SELECT * FROM bibliotecario";
	$resultado= $conexion->query($query);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Adiciona al Bibliotecario </title>
</head>
<body>
	<form action="adiciona_biblio.php" method="post">
 		<fieldset>
 			<legend>Datos del Bibliotecario</legend>
 			<p>Codigo ...............:<input tipe="Text" name="Cod_bib" value=""></p>
 			<p>Nombre ...............:<input tipe="text" name="Nombre_bib" value=""></p>
 			<p>Apellido paterno......:<input tipe="text" name="Appat_bib" value=""></p>
 			<p>apellido materno......:<input tipe="text" name="Apmat_bib" value=""></p>
 			<p>Celular ..............:<input tipe="int"  name="Celular_bib" value=""></p>
 			<p>Telefono  ............:<input tipe="int"  name="Telefono" value=""></p>
 			<p>Dirección electrónica.:<input tipe="text" name="Direc_elect" value=""></p>
 			<p>Turno  ...............:<input tipe="text" name="Turno" value=""></p>
 			<input type="submit" name="registrar" value="Adicionar">
 		</fieldset>
	</form>
</body>
</html>
