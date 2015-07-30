<?php

include ("conexion.php");


if(isset($_POST['nombre'])&& !empty($_POST['nombre'])&&
	isset($_POST['pass']) && !empty($_POST['pass']))

{

$con=mysql_connect($host,$user,$pass) or die ("problemas al conectar");
mysql_select_db($db, $con) or die ("problemas al conectar con la bd");
$estandar=mysql_query("SELECT * FROM codigo where nombre='$_POST[nombre]' AND  pass='$_POST[pass]'",$con);
}

if ($row=mysql_fetch_array($estandar)) {
	
	header("location: web/portafolio.html");

}
else{
	echo "<center>";
	echo "ERROR USUARIO O CONTRASENA INCORRECTO ";
	echo "<br>";
	$regresar='<a href="index.php" >Regresar</a>';
	echo $regresar;
	
	}


?>