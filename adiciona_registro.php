<?php 
  require ("conexion.php");
  $Cod_bib=$_POST['Cod_bib'];
  $Nombre_bib=$_POST['Nombre_bib'];
  $Appat_bib=$_POST['Appat_bib'];
  $Apmat_bib=$_POST['Apmat_bib'];
  $Celular_bib=$_POST['Celular_bib'];
  $Telefono=$_POST['Telefono'];
  $Dir_elect=$_POST['Direc_elect'];
  $Turno=$_POST['Turno'];
  
  echo $Cod_bib."<br>";
  echo $Nombre_bib."<br>";
  echo $Appat_bib."<br>";
  echo $Apmat_bib."<br>";
  echo $Celular_bib."<br>";
  echo $Telefono."<br>";
  echo $Dir_elect."<br>";
  echo $Turno."<br>";
  
  $query= "INSERT INTO bibliotecario (Cod_bib,Nombre_bib,Appat_bib,Apmat_bib,Celular_bib,Telefono,Dir_elect,Turno)  VALUES ('$Cod_bib','$Nombre_bib','$Appat_bib','$Apmat_bib',$Celular_bib,$Telefono,'$Dir_elect','$Turno')";

$resultado=$conexion->query($query);
if($resultado>0)
{
	echo "registro adicionado";
}
else
{
	echo "error al adicionar los datos...";
}
?>
<p><a href="index.html">Volver al inicio</a></p>


