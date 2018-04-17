<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="formulario_processa.php?processa=1" >
		Numero1: <input type="text" name="1"><br>
		Numero2: <input type="text" name="2"><br>
		<input type="submit" value="ok">
	</form>

	<form method="post" action="formulario_processa.php?processa=2">
		<input type="checkbox" name="opcao[]" value="viagem">viagem<br>
		<input type="checkbox" name="opcao[]" value="cinema">cinema<br>
		<input type="checkbox" name="opcao[]" value="teatro">teatro<br>
		<input type="checkbox" name="opcao[]" value="serie">serie netflix<br>
		<input type="checkbox" name="opcao[]" value="motel">motel<br>
		<input type="checkbox" name="opcao[]" value="balada">balada<br>
		<input type="submit" value="ok">
		
	</form>
<br><br>
		<form method="post" action="formulario_processa.php?processa=3" >
		Palindromo: <input type="text" name="palin"><br>
		
		<input type="submit" value="ok">
	</form>
</body>
</html>