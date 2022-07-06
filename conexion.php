<?php
   function conectarse()
   {
	  $servidor = "localhost";
	  $usuario = "root";
	  /*para conectarse con el usuario super administrador de mySQL
	$usuario = "wolfsk8";
	  $password = "";*/
	  $password = "";
	  $db = "biblioteca";
	$conectar = new mysqli($servidor, $usuario, $password, $db) or die ("NO SE PUDO ESTABLECER CONECCION");
	  return $conectar;
   }
   $conexion = conectarse();
?>
