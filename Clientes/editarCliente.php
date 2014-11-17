<html>
<head>
	<title>Actualizar Cliente </title>
</head>
<body>
	<h1>...Actualizar Cliente...</h1>
<?php

	$id = $_GET['id'];

	$db = new Sqlite3("base_clientes.db");

	$cli = $db->query("SELECT * FROM tbClientes WHERE id='$id';");

	$row =$cli->fetchArray();

?>

	<form action="actualizarCliente.php" method="POST">

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
				</tr>
				<td>
					<label>Direccion</label>
				</td>
				<td>
					<input type="text" name="direccion"  value="<?php echo $row['direccion']; ?>">
				</td>
			</tr>
		</table>
		<input type="submit" value="Actualizar">

	</form>
	<br></br>
		<a href="Clientes.php">Volver a Clientes</a>

</body>
</html>