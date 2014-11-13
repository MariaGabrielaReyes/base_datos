<html>
<head>
	<title>Actualizar Usuario </title>
</head>
<body>
	<h1>...Actualizar Usuario...</h1>
<?php

	$id = $_GET['id'];

	$db = new Sqlite3("base2.db");

	$usu = $db->query("SELECT * FROM tbUsuarios WHERE id='$id';");

	$row =$usu->fetchArray();

?>

	<form action="actualizarUsuario.php" method="POST">

		<label>Id........</label><label><?php echo 	$id; ?></label>
		<br><br>

		<input type="hidden" value="<?php echo 	$id;?>" name="id">


		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
		<br><br>

		<label>Apellido</label>
		<input type="text" name="apellido"  value="<?php echo $row['apellido']; ?>">
		<br><br>

		<input type="submit" value="Actualizar">

	</form>


</body>
</html>