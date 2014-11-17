<html>
<head>
	<title>Crear Gasto </title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Nuevo Gasto</h1>
	<form action="guardarGasto.php" method="POST">
		<table>
			<tr>
				<td>
					<label>Factura Nº</label>
				</td>
				<td>	
					<input type="text" name="factura">
				</td>
			</tr>
			<tr>
				<td>
					<label>Concepto</label>
				</td>
				<td>
					<input type="text" name="concepto">
				</td>
			</tr>
			<tr>
				<td>
					<label>Valor</label>
				</td>
				<td>
					<input type="text" name="valor">
				</td>
			</tr>
		</table>
		<input type="submit" value="Guardar">

	</form>
	<br></br>
		<a href="Gastos.php">Volver a Gastos</a>


</body>
</html>