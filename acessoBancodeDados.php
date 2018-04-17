<?php

	class BancoDeDados {
		private $servidor = "";
		private $login = "";
		private $senha = "";
		private $banco = "";

		function __construct($a,$b,$c,$d) {
		$this->servidor = $a;
		$this->login = $b;
		$this->senha = $c;
		$this->banco = $d;


		}

		function __destruct(){}

		function conexao () {

			$con = mysql_connect($this->servidor,$this->login,$this->senha,$this->banco); //conexão

			if($con != NULL) {
				$bd = mysql_select_db($this->banco);

				if($bd == NULL)
					echo "erro: acesso ao banco!";
			}
			else 
				echo "erro: acesso ao servidor";
		
  		}	


	  	function listar($consulta) {

	  		
			$resultado = mysql_query($consulta);

			$i = 0;

			echo "<table border='1'> <tr id=1> <td>Codigo</td> <td> Nome </td> <td id=3> Endereco</td> </tr> ";

			while($linha = mysql_fetch_object($resultado)) {
				if ($i % 2 == 0)
					echo "<tr>";
				else
					echo "<tr bgcolor = '#FFFF99'>";
				
				echo "<td>" . $linha->cli_cod . "</td>";
				echo "<td >" . $linha->cli_nome . "</td>";
				echo "<td>" .  $linha->cli_endereco . "</td>";
				echo "</tr>";

				$i++;
			}

			echo "</table>";
	  	}	
	}
?>