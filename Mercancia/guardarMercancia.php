<?php
	$db = new Sqlite3("base_mercancia.db");

	$nom = $_POST['nombre'];
	$cant = $_POST['cantidad'];
	$valor = $_POST['valor/uni'];

	$result= $db-> query("INSERT INTO tbMercancias(nombre,cantidad,'valor/uni') VALUES('$nom','$cant','$valor') ;");


	if ($result){
		echo "El producto ".$nom. " ha sido guardado satisfactoriamente.";
	}else{
		echo "El producto no ha sido guardado correctamente.";
	}
?>