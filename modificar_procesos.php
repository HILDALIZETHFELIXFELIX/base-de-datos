<?php
include("conexion.php");

//que tome el valor de la variable que queremos modificar


$Id=$_REQUEST['Id'];
$Nombre= $_POST['Nombre'];
$Apellido= $_POST['Apellido'];
$Direccion= $_POST['Direccion'];
$Telefono= $_POST['Telefono'];


$query = "UPDATE agenda SET Nombre='$Nombre',Apellido='$Apellido', Direccion='$Direccion' , Telefono='$Telefono'  WHERE  Id='$Id'";

$resultado= $conexion->query($query);

if($resultado){
	header('Location: tabla.php');
}
else{
	echo "insercion no exitosa";
}

?> 