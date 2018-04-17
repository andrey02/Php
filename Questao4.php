


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Questao4.php" >
		Numero: <input type="text" name="1"><br>
		<input type="submit" value="Calcular">
	</form>

</body>
</html>

<?php
	//pegando variavel pelo post
    if(isset($_POST)){
    	$number = $_POST["1"];
	}	

	//echo $number . "<br>";
	
	//funcao recursiva fatorial
	function fatorial($a) { 
		
    	if ($a == 0 )  return 1; 
    	 
		return ($a * fatorial($a-1)); 
    }

    //listar multiplicação
    

    
    echo $number . "! = " ;

    for($i = $number; $i >= 1 ; $i--) {
    		
    	echo $i==1 ? $i : $i . "*";
    }

    echo " = " . fatorial($number);
    

    



?>