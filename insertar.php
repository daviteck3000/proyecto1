<?php
include ("conexion.php");

if(isset($_POST['nombre'])&& !empty($_POST['nombre'])&&
	isset($_POST['pass']) && !empty($_POST['pass']))

{

$con=mysql_connect($host,$user,$pass) or die ("problemas al conectar");
mysql_select_db($db, $con) or die ("problemas al conectar con la bd");

mysql_query("INSERT INTO codigo (nombre, pass) VALUES ('$_POST[nombre]','$_POST[pass]')",$con);
echo "<center>";
echo "Usuario Registrado";
echo "<center>";
echo "<br>";
	$regresar='<a href="index.php" >Regresar</a>';
	echo $regresar;

} else{
	echo "<center>";
	echo "problemas al insertar datos";
	echo "<br>";
	$regresar='<a href="index.php" >Regresar</a>';
	echo $regresar;

}


?>

