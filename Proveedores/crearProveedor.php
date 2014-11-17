<html>
<head>
	<title>Crear Proveedor </title>
</head>
<body>
	<h1>....Nuevo Proveedor...</h1>
	<form action="guardarProveedor.php" method="POST">
		<table >

			<tr>
				<td>
					<label>Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre">
				</td>
			</tr>
			<tr>
				<td>
					<label>NIT</label>
				</td>
				<td>
					<input type="text" name="NIT">
				</td>
			</tr>
			<tr>
				<td>
					<label>Direccion</label>
				</td>
				<td>
					<input type="text" name="direccion">
				</td>
			</tr>
				<td>
				<label>Telefono</label>
				</td>
				<td>
				<input type="text" name="telefono">
				</td>
			<tr>
				<td>
				<label>Regimen</label>
				</td>
				<td>
				<input type="text" name="regimen">
				</td>
			</tr>

		</table>
		<br>
		<input type="submit" value="Guardar">

	</form>
<a href="Proveedores.php">Volver a Proveedores</a>

</body>
</html>