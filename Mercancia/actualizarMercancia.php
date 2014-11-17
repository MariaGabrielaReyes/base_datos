<?php 

$db = new Sqlite3("base_mercancia.db");

	$id = $_POST['id'];
	$nom = $_POST['nombre'];
	$cant = $_POST['cantidad'];
	$valor = $_POST['valor/uni'];


	$consulta = 'UPDATE tbMercancias SET nombre="'.$nom.'", cantidad="'.$cant.'", "valor/uni"="'.$valor.'" WHERE id="'.$id.'"';
	$result = $db->exec($consulta);

	echo $result;

	if ($result) {
		echo $nom. " ha sido actualizado exitosamente";
	}else{
		echo $nom. " NO ha sido actualizado exitosamente";
	}
?>
<br></br>
		<a href="Mercancias.php">Volver a Mercancias</a>