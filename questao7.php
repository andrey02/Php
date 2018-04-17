<html>

<body>
	
	<form id="form1" method="post" action="" onsubmit="return criar();" >
		Numero de Dependentes( 0 a 5) : <input id ="numero" type="text" name="1"> <br>
		<input type="submit" value="Enviar">
	</form>

	<form method='post' id="form2" action='questao7.php'>

	</form>

	<script type="text/javascript">
		

		//criando os formularios para os colaboradores
		function criar() {

			var number =  document.getElementById("numero").value;
			var formulario = document.getElementById("form2");
			
			while(number >= 1) {
				
				formulario.innerHTML += 'Nome: <input type="text" name="nome[]"> <br> ' +
				'Sexo(F ou M) : <input type="text" name="sexo[]"> <br>' +	
				'Ano de Nascimento : <input type="text" name="nasc[]"> <br>' +
				'<br> <br>' ;	
				
				
				
				number--;
			}

			formulario.innerHTML += '<input type="submit" value="Enviar">';


			

			return false; // para parar a submissao

		}

	</script>

	

</body>
</html>


<?php

//classe
	class Colaboradores {
		private $nome = array();
		private $sexo = array();
		private $nascimento = array();

		function __construct($a,$b,$c) {
		$this->nome = $a;
		$this->sexo = $b;
		$this->nascimento = $c;
		

		}
	/* testando se os valores obtidos estão corretos
	function printValores() {
		print_r( $this->nome );
		print_r( $this->sexo );
		print_r( $this->nascimento );
	}
	*/

	function gravarBanco($servidor, $login, $senha, $banco) {
			//fazendo a conexao
			$con = mysql_connect($this->servidor,$this->login,$this->senha,$this->banco); //conexão

			if($con != NULL) {
				$bd = mysql_select_db($this->banco);

				if($bd == NULL)
					echo "erro: acesso ao banco!";
			}
			else 
				echo "erro: acesso ao servidor";
		
  			}	
		

			//gravando
			$number = $this->nome.count(); // retorna a quantidade de valores do array

			//inserindo os dados um por vez atraves de um for
			for($i = 0; i< $number; i++) {
			$insere = "INSERT INTO colaboradores VALUES (" . this->nome[i] . "," . this->endereco[i] . "," . this->zona[i] . "," . this->cota[i] . ");" ;

			echo mysql_query($insere); // retorna true or false

			}

	}


	}  

	if(isset($_POST)) {
    	$n = $_POST['nome'];
    	$s = $_POST['sexo'];
    	$a = $_POST['nasc'];

    	/* testar se pegou os valores certos
    	print_r( $n );
    	print_r( $s );
    	print_r( $a );
    	*/ 
	}

	$obj = new Colaboradores($n,$s,$a);
	$obj->gravarBanco("localhost","root", "", "TADS"); // ja faz a conexao e insere os dados

	//$obj->printValores();



	
	
?>
