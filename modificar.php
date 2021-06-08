<!DOCTYPE html>
<html>
       <head> 
              <title> guardar </title>
       </head>
<body>
<center>

<?php

$Id =$_REQUEST ['Id'];
include ('conexion.php');

$query="SELECT * FROM agenda WHERE Id= '$Id'";
$resultado= $conexion ->query ("$query");
$row=$resultado->fetch_assoc();

?>

<form action= "modificar_procesos.php" method="POST">

<br>
<input type="text" REQUERID name="Id" readonly="readonly" value="<?php echo $row['Id']; ?>" /> <br/><br/>

<input type="text" REQUERID name="Nombre" value="<?php echo $row['Nombre']; ?>" /> <br/><br/> 

<input type="text" REQUERID name="Apellido"  value="<?php echo $row['Apellido']; ?>" /> <br/><br/>

<input type="text" REQUERID name="Direccion"  value="<?php echo $row['Direccion']; ?>" /> <br/><br/>

<input type="text" REQUERID name="Telefono"  value="<?php echo $row['Telefono']; ?>" /> <br/><br/>

<input type="submit" value="GUARGAR" />
</form>
</center>

</body>
</html>