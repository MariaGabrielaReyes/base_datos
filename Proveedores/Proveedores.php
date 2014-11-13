<html>
<head>
	<title>System_Proveedores</title>
	<meta charset="utf-8">
</head>

<body>
<?php
	$db = new Sqlite3("base_proveedores.db");
	$prov = $db -> query("SELECT * FROM TbProveedores;");
?>
	<h1>PROVEEDORES :D</h1>

	<table border="1px">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Nit</td>
			<td>Direccion</td>
			<td>Telefono</td>
			<td>Regimen</td>
			<td>Editar</td>
		</tr>

		<?php while ($fila =$prov -> fetchArray()) {
		?>
		<tr>

			<td><?php echo $fila ['id'];?></td>
			<td><?php echo $fila ['nombre'];?></td>
			<td><?php echo $fila ['NIT'];?></td>
			<td><?php echo $fila ['direccion'];?></td>
			<td><?php echo $fila ['telefono'];?></td>
			<td><?php echo $fila ['regimen'];?></td>
			<td>
				<a href="editarProveedor.php?id=<?php echo $fila ['id']; ?>">Editar</a>
				<a id="EliminarProv" href="eliminarProveedor.php?id=<?php echo $fila ['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php } ?>


	</table>

	<br><br>

<button><A HREF="crearProveedor.php">Crear Proveedor</A></button>

</body>
</html>