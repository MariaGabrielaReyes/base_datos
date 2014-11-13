<?php
	$db = new Sqlite3("base_clientes.db");

	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$cc = $_POST['cc'];
	$tel = $_POST['telefono'];
	$dir = $_POST['direccion'];

	$result= $db-> query("INSERT INTO tbClientes(nombre,apellido,cc,telefono,direccion) VALUES('$nom','$ape','$cc','$tel','$dir') ;");


	if ($result){
		echo "El Cliente ".$nom. " ha sido guardado satisfactoriamente.";
	}else{
		echo "El Cliente no sido guardado correctamente.";
	}
?>