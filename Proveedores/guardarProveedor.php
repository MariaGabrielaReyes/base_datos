<?php
	$db = new Sqlite3("base_proveedores.db");

	$nom = $_POST['nombre'];
	$nit = $_POST['NIT'];
	$dir = $_POST['direccion'];
	$tel = $_POST['telefono'];
	$reg = $_POST['regimen'];
	$result= $db->query("INSERT INTO TbProveedores(nombre, NIT, direccion, telefono, regimen) VALUES('$nom','$nit','$dir','$tel','$reg') ;");


	if ($result){
		echo "El usuario ".$nom. " ha sido guardado satisfactoriamente.";
	}else{
		echo "El usuario no ha sido guardado correctamente.";
	}
?>
<br><BR>
<a href="Proveedores.php">Volver a Proveedores</a>