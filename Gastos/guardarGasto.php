<?php
	$db = new Sqlite3("base_gastos.db");

	$fact = $_POST['factura'];
	$concp = $_POST['concepto'];
	$valor = $_POST['valor'];

	$result= $db-> query("INSERT INTO tbGastos(factura,concepto,valor) VALUES('$fact','$concp','valor') ;");


	if ($result){
		echo "El Gasto realizado ha sido guardado satisfactoriamente.";
	}else{
		echo "El Gasto realizado no ha sido guardado correctamente.";
	}
?>
<br></br>
		<a href="Gastos.php">Volver a Gastos</a>