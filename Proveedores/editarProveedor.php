<html>
<head>
	<title>Actualizar Proveedor </title>
</head>
<body>
	<h1>...Actualizar Proveedor...</h1>
<?php

	$id = $_GET['id'];

	$db = new Sqlite3("base_proveedores.db");

	$prov = $db->query("SELECT * FROM TbProveedores WHERE id='$id';");

	$row =$prov->fetchArray();

?>

	<form action="actualizarProveedor.php" method="POST">
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
					<label>NIT</label>
				</td>
				<td>
					<input type="text" name="NIT"  value="<?php echo $row['NIT']; ?>">
				</td>	
			</tr>
			<tr>
				<td>
					<label>Direccion</label>
				</td>
				<td>
					<input type="text" name="direccion"  value="<?php echo $row['direccion']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Telefono</label>
				</td>
				<td>
					<input type="text" name="telefono"  value="<?php echo $row['telefono']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Regimen</label>
				</td>
				<td>
					<input type="text" name="regimen"  value="<?php echo $row['regimen']; ?>">
				</td>
			</tr>

		</table>
		<input type="submit" value="Actualizar">

	</form>
	<br></br>
		<a href="Proveedores.php">Volver a Proveedores</a>

</body>
</html>