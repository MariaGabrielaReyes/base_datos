<html>
<head>
	<title>System_Gaby</title>
	<meta charset="utf-8">
</head>

<body>
<?php
	$db = new Sqlite3("base_clientes.db");
	$clie = $db -> query("SELECT * FROM tbClientes;");
?>
	<h1>CLIENTECITOS Lindos :3</h1>

	<table border="1px">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>C.C</td>
			<td>Direccion</td>
			<td>Editar</td>
		</tr>

		<?php while ($fila =$clie -> fetchArray()) {
		?>
		<tr>

			<td><?php echo $fila ['id'];?></td>
			<td><?php echo $fila ['nombre'];?></td>
			<td><?php echo $fila ['apellido'];?></td>
			<td><?php echo $fila ['cc'];?></td>
			<td><?php echo $fila ['direccion'];?></td>
			<td>
				<a href="editarCliente.php?id=<?php echo $fila ['id']; ?>">Editar</a>
				<a id="EliminarClie" href="eliminarCliente.php?id=<?php echo $fila ['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php } ?>


	</table>

	<br><br>

<button><A HREF="crearCliente.php">Crear Cliente</A></button>
<br>
<a href="http://localhost/Gaby/Trabajito_Gaby/">Menú Principal</a>

</body>
</html>