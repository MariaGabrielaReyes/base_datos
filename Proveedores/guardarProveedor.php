<?php
	$db = new Sqlite3("base_proveedores.db");

	$nom = $_POST['nombre'];

	$result= $db->query("INSERT INTO TbProveedores(nombre) VALUES('$nom') ;");


	if ($result){
		echo "El usuario ".$nom. " ha sido guardado satisfactoriamente.";
	}else{
		echo "El usuario no ha sido guardado correctamente.";
	}
?>