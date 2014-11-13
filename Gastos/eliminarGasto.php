
<title>Eliminar Usuario :P</title>

<?php
	$db = new Sqlite3("base2.db");

	$codigo = $_GET['id'];

	$eliminar = $db ->exec("DELETE FROM tbUsuarios WHERE id=$codigo");


	if ($eliminar){
		echo "El usuario ha sido eliminado satisfactoriamente.";
	}else{
		echo "Usuario no pudo ser eliminado correctamente.";
	 }

 ?>
