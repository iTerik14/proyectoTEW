<?php
	//include ("secion.php");
 	require('conexion.php');
 	$query = "SELECT * FROM bibliotecario";
 	$respuesta = $conexion->query($query);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de Bibliotecario</title>
	<script languaje="JavaScript" type="text/JavaScript" src="ajax.js"></script>
</head>
<body>
  <form>
	<table border="1" width="80%">
  	  <tr>
		<th>Cod_bib</th>
		<th>Nombre_bib</th>
		<th>Appat_bib</th>
		<th>Apmat_bib</th>
		<th>Celular_bib</th>
		<th>Telefono</th>
		<th>Dir_elect</th>
		<th>Turno</th>
	    <th colspan="2">Operaciones</th>
	  </tr>
	  <?php
 	    foreach ($respuesta as $key => $value) {
      ?>
	  <tr>
		<td><?=$value['Cod_bib']?></td>
		<td><?=$value['Nombre_bib']?></td>
		<td><?=$value['Appat_bib']?></td>
		<td><?=$value['Apmat_bib']?></td>
		<td><?=$value['Celular_bib']?></td>
		<td><?=$value['Telefono']?></td>
		<td><?=$value['Dir_elect']?></td>		
		<td><?=$value['Turno']?></td>
		<td> <a href="modificar.php?id=<?=$value['idpersona']?>"><img src="ico/editar.PNG"></a></td>
		<td> <a href="eliminar.php?id=<?=$value['idpersona']?>"><img src="ico/eliminar.PNG"></a></td>
   	  </tr>
		<?php } ?>
	</table>
	<td> <a href="adicionar.php?id=<?=$value['idpersona']?>"><img src="ico/insertar.PNG"></a></td>
	<p><a href="reporte1.php">ver reporte 1</a></p>
 </form>
	<div id="resultado">
		<?php include('consulta.php') ?>
	</div>
</body>
</html>



