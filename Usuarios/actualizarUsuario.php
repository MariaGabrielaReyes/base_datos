<?php 

$db = new Sqlite3("base2.db");

	$id = $_POST['id'];
	$nom = $_POST['nombre'];
	$apel = $_POST['apellido'];


	$consulta = 'UPDATE tbUsuarios SET nombre="'.$nom.'", apellido="'.$apel.'" WHERE id="'.$id.'"';
	$result = $db->exec($consulta);

	echo $result;

	if ($result) {
		echo $nom. " ha sido actualizado exitosamente";
	}else{
		echo $nom. " NO ha sido actualizado exitosamente";
	}
?>