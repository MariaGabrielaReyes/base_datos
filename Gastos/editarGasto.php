<html>
<head>
	<title>Actualizar Gasto </title>
</head>
<body>
	<h1>...Actualizar Gasto...</h1>
<?php

	$id = $_GET['id'];

	$db = new Sqlite3("base_gastos.db");

	$gast = $db->query("SELECT * FROM tbGastos WHERE id='$id';");

	$row =$gast->fetchArray();

?>

	<form action="actualizarGasto.php" method="POST">

		<label>Id........</label><label><?php echo 	$id; ?></label>
		<br><br>

		<input type="hidden" value="<?php echo 	$id;?>" name="id">


			<table>
			<tr>
				<td>
					<label>Factura</label>
				</td>
				<td>
					<input type="text" name="factura" value="<?php echo $row['factura']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Concepto</label>
				</td>
				<td>
					<input type="text" name="concepto"  value="<?php echo $row['concepto']; ?>">
				</td>	
			</tr>
			<tr>
				<td>
					<label>Valor</label>
				</td>
				<td>
					<input type="text" name="valor"  value="<?php echo $row['valor']; ?>">
				</td>
			</tr>
			
		</table>
		<input type="submit" value="Actualizar">

	</form>


</body>
</html>