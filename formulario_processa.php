<?php
	
	$processo = $_GET["processa"];
	switch($processo)
	{
		case 1:
			processaOpcao1();
			break;
		case 2:
			processaOpcao2();
			break;
		case 3:
			processaOpcao3();
			break;
	}


?>
<?php
	function processaOpcao1(){

		$num1 = $_POST["1"];
		$num2 = $_POST["2"];
		
 		
 		
		
		while($num1<=$num2){
			if($num1 % 2  == 0){
				echo $num1 . " - ";
			}
			$num1 ++;
		}

	}

	function processaOpcao2(){

		$op = $_POST['opcao'];

		for($i=0; $i < count($op); $i++)
			echo $op[$i] . "<br>";
	}

	function processaOpcao3() {
		$nome = $_POST["palin"];
		$nome = preg_replace('/\s+/', '', $nome); // retirar todos os espaços
		$nome2 = $nome;
		
		
		for($i = 0, $j = strlen($nome)-1; $i < strlen($nome) ; $i++, $j--) {
			$nome[$i] = $nome2[$j];

		}

		if($nome == $nome2) // igual
			echo "e palindromo";
		else
			echo "nao e palindromo";

		 
	}
	

	

?>