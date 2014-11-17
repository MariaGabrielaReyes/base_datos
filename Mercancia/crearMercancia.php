<html>
<head>
	<title>Crear Mercancia </title>
</head>
<body>
	<h1>...Crear Mercancia...</h1>
	<form action="guardarMercancia.php" method="POST">
		<table>
			<tr>
				<td>
					<label>Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre">
				</td>
			</tr>
			<tr>
				<td>
					<label>Cantidad</label>
				</td>
				<td>
					<input type="text" name="cantidad">
				</td>	
			</tr>
			<tr>
				<td>
					<label>Valor/uni</label>
				</td>
				<td>
					<input type="text" name="valor/uni">
				</td>
			</tr>

		
		</table>
		<input type="submit" value="Guardar">

	</form>
<br></br>
		<a href="Mercancias.php">Volver a Mercancias</a>

</body>
</html>