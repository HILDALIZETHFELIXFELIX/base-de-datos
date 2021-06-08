<?php
include ("conexion.php");

$Id =$_REQUEST ['Id'];

$query= "DELETE FROM agenda WHERE Id= '$Id' ";

$resultado=$conexion->query ($query);

if ($resultado) {

	header ('Location: tabla.php');

}

else{
	
	echo "Eliminacion no exitosa";

}

?>
