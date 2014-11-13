
<title>Eliminar Cliente :P</title>

<?php
	$db = new Sqlite3("base_clientes.db");

	$codigo = $_GET['id'];

	$eliminar = $db ->exec("DELETE FROM tbClientes WHERE id=$codigo");


	if ($eliminar){
		echo "El Cliente ha sido eliminado satisfactoriamente.";
	}else{
		echo "Cliente no pudo ser eliminado correctamente.";
	 }

 ?>
