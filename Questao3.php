<?php
	class CalculoLoja {
		private $valor = 0;

		function __construct($a){
		
		$this->valor = $a;
		}

		function desconto() {
			return $this->valor*0.9;
		}
		

		function parcelamento() {
			return $this->valor/3;
		}
		function comissaoVista() {
			return $this->desconto()*0.05;
		}
		function comissaoParcelada() {
			return $this->valor*0.05;
		}

	}



	//chamando objeto
	$obj = new CalculoLoja(90); // valor recebido

	echo "a) " . $obj->Desconto() . "<br>";
	echo "b) " . $obj->parcelamento() . "<br>";
	echo "c) " . $obj->comissaoVista() . "<br>";
	echo "d) " . $obj->comissaoParcelada() . "<br>";

	



?>