<html>
<head>
	<title>System_Usuarios</title>
	<meta charset="utf-8">
</head>

<body>
<?php
	$db = new Sqlite3("base2.db");
	$usus = $db -> query("SELECT * FROM tbUsuarios;");
?>
	<h1>Usuarios System :D</h1>

	<table border="1px">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Editar</td>
		</tr>

		<?php while ($fila =$usus -> fetchArray()) {
		?>
		<tr>

			<td><?php echo $fila ['id'];?></td>
			<td><?php echo $fila ['nombre'];?></td>
			<td><?php echo $fila ['apellido'];?></td>
			<td>
				<a href="editarUsuario.php?id=<?php echo $fila ['id']; ?>">Editar</a>
				<a id="EliminarUsu" href="eliminarUsuario.php?id=<?php echo $fila ['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php } ?>


	</table>

	<br><br>

<button><A HREF="crearUsuario.php">Crear Usuario</A></button>

</body>
</html>