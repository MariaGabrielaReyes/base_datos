
<title>Eliminar Usuario :P</title>

<?php
	$db = new Sqlite3("base_gastos.db");

	$codigo = $_GET['id'];

	$eliminar = $db ->exec("DELETE FROM tbGastos WHERE id=$codigo");


	if ($eliminar){
		echo "El gasto ha sido eliminado satisfactoriamente.";
	}else{
		echo "Gasto no eliminado correctamente.";
	 }

 ?>
<br></br>
		<a href="Gastos.php">Volver a Gastos</a>