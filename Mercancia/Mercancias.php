<html>
<head>
	<title>System_Gaby</title>
	<meta charset="utf-8">
</head>

<body>
<?php
	$db = new Sqlite3("base_mercancia.db");
	$prod = $db -> query("SELECT * FROM tbMercancias;");
?>
	<h1>MERCANCIA :D</h1>

	<table border="1px">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Cantidad</td>
			<td>Valor/uni</td>
			<td>Editar</td>
		</tr>

		<?php while ($fila =$prod -> fetchArray()) {
		?>
		<tr>

			<td><?php echo $fila ['id'];?></td>
			<td><?php echo $fila ['nombre'];?></td>
			<td><?php echo $fila ['cantidad'];?></td>
			<td><?php echo $fila ['valor/uni'];?></td>
			<td>
				<a href="editarMercancia.php?id=<?php echo $fila ['id']; ?>">Editar</a>
				<a id="EliminarProd" href="eliminarMercancia.php?id=<?php echo $fila ['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php } ?>


	</table>

	<br><br>

<button><A HREF="crearMercancia.php">Crear Mercancia</A></button>

</body>
</html>