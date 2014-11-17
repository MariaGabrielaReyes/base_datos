<html>
<head>
	<title>Actualizar Empleado </title>
</head>
<body>
	<h1>...Actualizar Empleado...</h1>
<?php

	$id = $_GET['id'];

	$db = new Sqlite3("base_empleados.db");

	$usu = $db->query("SELECT * FROM tbEmpleados WHERE id='$id';");

	$row =$usu->fetchArray();

?>

	<form action="actualizarEmpleado.php" method="POST">

		<label>Id........</label><label><?php echo 	$id; ?></label>
		<br><br>

		<input type="hidden" value="<?php echo 	$id;?>" name="id">


		<table>
			<tr>
				<td>
					<label>Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Apellido</label>
				</td>
				<td>
					<input type="text" name="apellido"  value="<?php echo $row['apellido']; ?>">
				</td>	
			</tr>
			<tr>
				<td>
					<label>C.C.</label>
				</td>
				<td>
					<input type="text" name="cc"  value="<?php echo $row['cc']; ?>">
				</td>
			</tr>
				<td>
					<label>Telefono</label>
				</td>
				<td>
					<input type="text" name="telefono"  value="<?php echo $row['telefono']; ?>">
				</td>
			</tr>
		</table>

		<input type="submit" value="Actualizar">

	</form>
<br></br>
		<a href="Empleados.php">Volver a Empleados</a>

</body>
</html>