<?php


class Calculadora {
	
	private $n1 = 0;
	private $n2 = 0;
	

	function __construct($a,$b) {
		$this->n1 = $a;
		$this->n2 = $b;

	}

	function __destruct(){}

	function getN1() {
		return $this->n1;
	}

	function getN2() {
		return $this->n2;
	}
	

	function setN1($a) {
		$this->n1 = $a;
	}

	function setN2($a) {
		$this->n2 = $a;
	}
	


	function soma() {

             return ($this->n1+$this->n2);
                
     }  


     function divisao() {

             return ($this->n1/$this->n2);
             
     }    
     

     function multiplicacao() {

             return ($this->n1*$this->n2);   
     }

     function subtracao() {

             
             return ($this->n1-$this->n2);
             
             
     }

	function calculo($c) {

        switch($c){
            
            case '+':
                    return $this->soma();   
            

            case '-':
                    return $this->subtracao();
            

            case '*':
                    return $this->multiplicacao();
            

            case '/':
                    return $this->divisao();
            


            


        }
                        
    }



}

?>