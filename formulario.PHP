<!DOCTYPE html> 
<html>
<head>

	<title>REGISTRO DE AGENDA</title>
</head>

<body bgcolor="#CFF800">
<center>

<form action= "guardar.php" method="post">
<!--es el archivo donde se encuentra el proceso para guardar los datos realice un formulario donde utilice 6 label y 6 cajas de textos y 4 botones--> 
<!--required es para especificar que el campo sea obligatorio de contestar lo que se te pide.-->
<!--los tipos de objeto que utilice text,type y que quiero que aparezaca-->
 <!--<br>salto de linea, <h1> tamaño de letra,<b>texto en negrita, <i> texto cursiva, <table> use una tabla con borde color,<u> texto subrayado <center> centrar el texto-->

	<p style = "font-family: arial black;"> 
		<!--el tipo de letra que utilizare-->
		<font color="red"><h1><i><u><b>REGISTRO DE AGENDA</font></h1></i></b></u></p><br>
		<!--color de letra-->
       <table bordercolor= "#FF689D" border= "8" cellpadding="15" cellpadding="15" >
       	<tr>
       		     <td>

	    <br> <b> NOMBRE: <input type="text" required name="Nombre" value=""/>          </b></br>
		 <br>    <b> APELLIDO: <input type="text" required name="Apellido" value=""/>      </b></br>
		  <br>   <b>DIRECCION: <input type="text" required name="Direccion" value=""/>    </b></br>
		   <br>  <b>TELEFONO: <input type="text" required name="Telefono" value=""/>      </b></br>
		
         <br>
<!--aqui realice los botones necesarios para mi formulario-->
		<CENTER>
		<input style="background-color:red" type= "submit" value="GUARDAR"/>
		<input style="background-color: orange" type= "submit"  value= "SALIR"/>
		</CENTER>
        </br>
</td>
</table>
	</form>
	</body>
	</html>







