<html>
<head>
	<title>Crear Empleado </title>
</head>
<body>
	<h1>..Crear Empleado..</h1>
	<form action="guardarEmpleado.php" method="POST">

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

		</table>
		
		<input type="submit" value="Guardar">

	</form>
<br></br>
		<a href="Empleados.php">Volver a Empleados</a>

</body>
</html>