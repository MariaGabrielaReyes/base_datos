<?php 

$db = new Sqlite3("base_clientes.db");

	$id= $_POST['id'];
	$nom = $_POST['nombre'];
	$apel = $_POST['apellido'];
	$cc = $_POST['cc'];
	$tel = $_POST['telefono'];
	$dir = $_POST['direccion'];

	$consulta = 'UPDATE tbClientes SET nombre="'.$nom.'", apellido="'.$apel.'", cc="'.$cc.'", telefono="'.$tel.'", direccion="'.$dir.'" WHERE id="'.$id.'"';
	$result = $db->exec($consulta);

	echo $result;

	if ($result) {
		echo $id. " ha sido actualizado exitosamente";
	}else{
		echo $nom. " NO ha sido actualizado exitosamente";
	}
?>