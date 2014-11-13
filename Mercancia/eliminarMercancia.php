
<title>Eliminar Mercancia :P</title>

<?php
	$db = new Sqlite3("base_mercancia.db");

	$codigo = $_GET['id'];

	$eliminar = $db ->exec("DELETE FROM tbMercancias WHERE id=$codigo");


	if ($eliminar){
		echo "El producto ha sido eliminado satisfactoriamente.";
	}else{
		echo "El producto no pudo ser eliminado correctamente.";
	 }

 ?>
