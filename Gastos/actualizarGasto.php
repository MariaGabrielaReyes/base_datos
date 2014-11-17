<?php 

$db = new Sqlite3("base_gastos.db");

	$id = $_POST['id'];
	$fact = $_POST['factura'];
	$cocp = $_POST['concepto'];
	$valor = $_POST['valor'];


	$consulta = 'UPDATE tbGastos SET factura="'.$fact.'", concepto="'.$cocp.'", valor="'.$valor.'" WHERE id="'.$id.'"';
	$result = $db->exec($consulta);

	echo $result;

	if ($result) {
		echo " ha sido actualizado exitosamente";
	}else{
		echo " NO ha sido actualizado exitosamente";
	}
?>
<br></br>
		<a href="Gastos.php">Volver a Gastos</a>