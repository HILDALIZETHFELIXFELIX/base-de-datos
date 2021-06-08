<?php
//mi archivo fue guardado en C:xampp\htdocs\sesiones\conexion.php
//mi carpeta le puse como nombre sesiones donde todos los archivos han sido guardadas en el C:xampp\htdocs para que pueda funcionar en el localhost, yo este archivo lo guarde como conexion.php.
//mi base de datos yo le puse como nombre practica1

$conexion = 	New mysqli ("localhost", "root","","ejercicio"); 
//sirve para darnos cuenta si se podra hacer la conexion de nuestra base de datos

if ($conexion){
	echo "LIZETH LA CONEXION ES MUY EXITOSA LA PODRAS USAR SIN NINGUN PROBLEMA";
// con esta variable me dare cuenta que si fue conectada mi base de datos en phpMyAdmin
}

else{
	echo "LIZETH LA CONEXION NO FUE EXITOSA ALGUN CODIGO HA DE ESTAR MAL DECLARADA";
//con esta variable me dare cuenta que no se pudo conectar mi base de datos y que algun codigo ha de estar mal por eso no se podra hacer bien la conexion.
    }
?>
