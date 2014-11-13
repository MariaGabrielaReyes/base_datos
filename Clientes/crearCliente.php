<html>
<head>
	<title>Crear Cliente </title>
</head>
<body>
	<h1>..Crear Cliente...</h1>
	<form action="guardarCliente.php" method="POST">

		<table>
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
					<label>Apellido</label>
				</td>
				<td>
					<input type="text" name="apellido">
				</td>
			</tr>
			<tr>
				<td>
					<label>C.C</label>
				</td>
				<td>
					<input type="text" name="cc">
				</td>
			</tr>
			<tr>
				<td>
					<label>Telefono</label>
				</td>
				<td>
					<input type="text" name="telefono">
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


		</table>

		<input type="submit" value="Guardar">

	</form>


</body>
</html>