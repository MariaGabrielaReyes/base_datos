<html>
<head>
	<title>System_Gaby</title>
	<meta charset="utf-8">
</head>

<body>
<?php
	$db = new Sqlite3("base_empleados.db");
	$emp = $db -> query("SELECT * FROM tbEmpleados;");
?>
	<h1>EMPLEADOS :D</h1>

	<table border="1px">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>C.C.</td>
			<td>Telefono</td>
			<td>Editar</td>
		</tr>

		<?php while ($fila =$emp -> fetchArray()) {
		?>
		<tr>

			<td><?php echo $fila ['id'];?></td>
			<td><?php echo $fila ['nombre'];?></td>
			<td><?php echo $fila ['apellido'];?></td>
			<td><?php echo $fila ['cc'];?></td>
			<td><?php echo $fila ['telefono'];?></td>
			<td>
				<a href="editarEmpleado.php?id=<?php echo $fila ['id']; ?>">Editar</a>
				<a id="EliminarEmp" href="eliminarEmpleado.php?id=<?php echo $fila ['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php } ?>


	</table>

	<br><br>

<button><A HREF="crearEmpleado.php">Crear Empleado</A></button>
<br>
<a href="http://localhost/Gaby/Trabajito_Gaby/">Menú Principal</a>

</body>
</html>