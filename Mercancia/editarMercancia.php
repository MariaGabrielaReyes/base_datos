Mercancias<html>
<head>
	<title>Actualizar Mercancia </title>
</head>
<body>
	<h1>...Actualizar Mercancia...</h1>
<?php

	$id = $_GET['id'];

	$db = new Sqlite3("base_mercancia.db");

	$prod = $db->query("SELECT * FROM tbMercancias WHERE id='$id';");

	$row =$prod->fetchArray();

?>

	<form action="actualizarMercancia.php" method="POST">

		<label>Id........</label><label><?php echo 	$id; ?></label>
		<br><br>

		<input type="hidden" value="<?php echo 	$id;?>" name="id">


			<table>
			<tr>
				<td>
					<label>Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Cantidad</label>
				</td>
				<td>
					<input type="text" name="cantidad"  value="<?php echo $row['cantidad']; ?>">
				</td>	
			</tr>
			<tr>
				<td>
					<label>Valor/uni</label>
				</td>
				<td>
					<input type="text" name="valor/uni"  value="<?php echo $row['valor/uni']; ?>">
				</td>
			</tr>
		
		</table>

		<input type="submit" value="Actualizar">

	</form>
	<br></br>
		<a href="Mercancias.php">Volver a Mercancias</a>


</body>
</html>