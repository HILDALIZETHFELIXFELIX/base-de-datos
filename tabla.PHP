<!Doctype html>
<html>

<head>

<title>Agenda</title>
</head>
	<body bgcolor="yellow">
		<center>

			<table bgcolor="pink" border="7">
				
				<thead>
				
					<th colspan="1"><a href="formulario.php"> Numero de Usuario</a> </th>
					<th colspan="5">"AGENDA"     Nombre de los usuarios</th>
					

				</thead>
					<tbody>
						<tr>
							
							<td>Id</td>
							<td>Nombre</td>
							<td>Apellido</td>
							<td>Direccion</td>
							<td>Telefono</td>
						
							<td  colspan="2">Funciones </td>

						</tr>
						
						<?php
						include("conexion.php");
						$query= "SELECT * FROM agenda";

						$resultado =$conexion->query("$query");
						while($row=$resultado->fetch_assoc()){

						?>
						
						<tr>
							<td><?php echo $row['Id']; ?></td>
							<td><?php echo $row['Nombre']; ?></td>
							<td><?php echo $row['Apellido']; ?></td>
							<td><?php echo $row['Direccion']; ?></td>
							<td><?php echo $row['Telefono']; ?></td>

							<td><a href="modificar.php?Id=<?php echo $row['Id']; ?>">Modificar</a></td>
							 <td><a href="eliminar.php?Id=<?php echo $row['Id']; ?>">Eliminar</a></td>

						</tr>
						<?php
													}
					

						?>

					</tbody>

			</table>
		</center>
	</body>
</html> 