<?php
	class Distribuidores {
		private nome = '';
		private endereco = '';
		private zona = '';
		private cota = '';

		function __construct($a,$b,$c,$d) {
		$this->nome = $a;
		$this->endereco = $b;
		$this->zona = $c;
		$this->cota = $d;

		}

		function getNome() {
			return $this->nome;
		}

		function getEndereco() {
			return $this->endereco;
		}
		function getZona() {
			return $this->zona;
		}
		function getCota() {
			return $this->cota;
		}

		function setNome($a) {
			$this->nome = $a;
		}
		function setEndereco($a) {
			$this->endereco = $a;
		}
		function setZona($a) {
			$this->zona = $a;
		}
		function setCota($a) {
			$this->cota = $a;
		}


		//grava os dados num banco passando os parametros
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
			$insere = "INSERT INTO distribuidor VALUES (" . this->nome . "," . this->endereco . "," . this->zona . "," . this->cota . ");" ;

			echo mysql_query($insere); // retorna true or false

	}
?>