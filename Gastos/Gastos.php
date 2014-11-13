<html>
<head>
	<title>System_Gaby</title>
	<meta charset="utf-8">
</head>

<body>
<?php
	$db = new Sqlite3("base_gastos.db");
	$gast = $db -> query("SELECT * FROM tbGastos;");
?>
	<h1>GASTOS :D</h1>

	<table border="1px">
		<tr>
			<td>Id</td>
			<td>Factura Nº</td>
			<td>Concepto</td>
			<td>Valor</td>
			<td>Editar</td>
		</tr>

		<?php while ($fila =$gast -> fetchArray()) {
		?>
		<tr>

			<td><?php echo $fila ['id'];?></td>
			<td><?php echo $fila ['factura'];?></td>
			<td><?php echo $fila ['concepto'];?></td>
			<td><?php echo $fila ['valor'];?></td>

			<td>
				<a href="editarGasto.php?id=<?php echo $fila ['id']; ?>">Editar</a>
				<a id="EliminarGast" href="eliminarGasto.php?id=<?php echo $fila ['id']; ?>">Eliminar</a>
			</td>
		</tr>
		<?php } ?>


	</table>

	<br><br>

<button><A HREF="crearGasto.php">Nuevo Gasto</A></button>

</body>
</html>