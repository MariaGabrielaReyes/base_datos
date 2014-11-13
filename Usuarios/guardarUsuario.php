<?php
	$db = new Sqlite3("base2.db");

	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];


	$result= $db-> query("INSERT INTO tbUsuarios(nombre,apellido) VALUES('$nom','$ape') ;");


	if ($result){
		echo "El usuario ".$nom. " ha sigo guardado satisfactoriamente.";
	}else{
		echo "El usuario no sigo guardado correctamente.";
	}
?>