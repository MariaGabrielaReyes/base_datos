
<title>Eliminar Proveedor :P</title>

<?php
	$db = new Sqlite3("base_proveedores.db");

	$codigo = $_GET['id'];

	$eliminar = $db->exec("DELETE FROM TbProveedores WHERE id=$codigo;");


	if ($eliminar){
		echo "El Proveedor ha sido eliminado satisfactoriamente.";
	}else{
		echo "Proveedor no pudo ser eliminado correctamente.";
	 }

 ?>
 <BR><BR>
 	<a href="Proveedores.php">Volver a Proveedores</a>
