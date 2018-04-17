<?php

class base {

	private $a = 10;

	function __construct(){
		echo "estou no construtor<br><br>";
		$this->name = "exemplo OO";
	}

	function imprime() {
		echo "ola... imprime<br>";
	}

	function __destruct() {
		echo "<br>Destruindo... " . $this->name . "\n";
	}

	function getA() {
		return $this->a;
	}
}


//chamando objeto

$obj = new base();

$obj->imprime();

echo $obj->getA();

?>