<?php 

$db = new Sqlite3("base_Proveedores.db");

	$id = $_POST['id'];
	$nom = $_POST['nombre'];
	$nit = $_POST['NIT'];
	$tel = $_POST['telefono'];
	$reg = $_POST['regimen'];


$consulta = 'UPDATE TbProveedores SET nombre="'.$nom.'", NIT="'.$nit.'", telefono="'.$tel.'", regimen="'.$reg.'" WHERE id="'.$id.'"';
	$result = $db->exec($consulta);	$result = $db->exec($consulta);

	echo $result;

	if ($result) {
		echo $nom. " ha sido actualizado exitosamente";
	}else{
		echo $nom. " NO ha sido actualizado exitosamente";
	}
?>