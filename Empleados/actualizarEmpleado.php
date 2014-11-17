<?php 

$db = new Sqlite3("base_empleados.db");

	$id = $_POST['id'];
	$nom = $_POST['nombre'];
	$apel = $_POST['apellido'];
	$Cc = $_POST['cc'];
	$tel = $_POST['telefono'];


	$consulta = 'UPDATE tbEmpleados SET nombre="'.$nom.'", apellido="'.$apel.'", cc="'.$Cc.'", telefono="'.$tel.'" WHERE id="'.$id.'"';
	$result = $db->exec($consulta);

	echo $result;

	if ($result) {
		echo $nom. " ha sido actualizado exitosamente";
	}else{
		echo $nom. " NO ha sido actualizado exitosamente";
	}
?>
<br></br>
		<a href="Empleados.php">Volver a Empleados</a>