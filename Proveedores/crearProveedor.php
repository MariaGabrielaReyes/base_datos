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
					<input type="text" name="Direccion">
				</td>
			</tr>
				<td>
				<label>Telefono</label>
				</td>
				<td>
				<input type="text" name="Telefono">
				</td>
			<tr>
				<td>
				<label>Regimen</label>
				</td>
				<td>
				<input type="text" name="Regimen">
				</td>
			</tr>

		</table>
		<br>
		<input type="submit" value="Guardar">

	</form>


</body>
</html>