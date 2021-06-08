<?php
include ("conexion.php");
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];


$query="INSERT INTO agenda (Nombre, Apellido, Direccion, Telefono) values ('$Nombre', '$Apellido', '$Direccion', '$Telefono')";

$resultado=$conexion->query($query);

if($resultado)
{
	echo "guardado correctamente";
	header("location: tabla.php");
}
else
{
	echo "error al guardar";
}

?>