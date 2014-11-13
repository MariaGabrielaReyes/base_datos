<?php
	$db = new Sqlite3("base_empleados.db");

	$nom = $_POST['nombre'];
	$apel = $_POST['apellido'];
	$cc = $_POST['cc'];
	$tel = $_POST['telefono'];

	$result= $db-> query("INSERT INTO tbEmpleados(nombre,apellido,cc,telefono) VALUES('$nom','$apel','$cc','$tel') ;");


	if ($result){
		echo $nom. " ha sido guardado satisfactoriamente.";
	}else{
		echo "El empleado no ha sido guardado correctamente.";
	}
?>