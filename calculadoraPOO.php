

<?php

include "./biblioteca/calculadora.php";

$b = $c = "";
if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['botao']))
{
	$b = $_POST['n1'];
	$c = $_POST['n2'];
	$a = $_POST['botao'];


	$obj = new Calculadora($b,$c);

	echo "<br>" . $obj->calculo($a);
}

?>

	<form method="post" action="calculadoraPOO.php" >
			Numero1: <input type="text" name="n1" value = "<?php echo $b; ?>" ><br>
			Numero2: <input type="text" name="n2" value = "<?php echo $c; ?>" ><br>
			<input type="submit" name="botao" value="+">
			<input type="submit" name="botao" value="-">
			<input type="submit" name="botao" value="*">
			<input type="submit" name="botao" value="/">
	</form>




