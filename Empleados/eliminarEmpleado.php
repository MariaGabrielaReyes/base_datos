
<title>Eliminar Empleado</title>

<?php
	$db = new Sqlite3("base_empleados.db");

	$codigo = $_GET['id'];

	$eliminar = $db ->exec("DELETE FROM tbEmpleados WHERE id=$codigo");


	if ($eliminar){
		echo "El usuario ha sido eliminado satisfactoriamente.";
	}else{
		echo "Usuario no pudo ser eliminado correctamente.";
	 }

 ?>
