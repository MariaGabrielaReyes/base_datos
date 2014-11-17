
<title>Eliminar Empleado</title>

<?php
	$db = new Sqlite3("base_empleados.db");

	$codigo = $_GET['id'];

	$eliminar = $db ->exec("DELETE FROM tbEmpleados WHERE id=$codigo");


	if ($eliminar){
		echo "El Empleado ha sido eliminado satisfactoriamente.";
	}else{
		echo "Empleado no eliminado correctamente.";
	 }

 ?>
<br></br>
		<a href="Empleados.php">Volver a Empleados</a>