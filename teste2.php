<?php
	
                  
	function calculadora($a, $b, $c) {

        switch($c){
            
            case '+':
                    return soma($a,$b);   
            break;

            case '-':
                    return subtracao($a,$b);
            break;

            case '*':
                    return multiplicacao($a,$b);
            break;

            case '/':
                    return divisao($a,$b);
            break;


            


        }
                        
    }  






    function soma($a, $b) {

             return ($a+$b);
                
     }  


     function divisao($a, $b) {

             return ($a/$b);
             
     }    
     

     function multiplicacao($a, $b) {

             return ($a*$b);   
     }

     function subtracao($a, $b) {

             
             return ($a-$b);
             
             
     }           	
  	  

echo "subtracao: ". calculadora(1,2, '-') . "<br>";
echo "soma: ". calculadora(1,2, '+') . "<br>";
echo "divisao: ". calculadora(1,2, '/') . "<br>";
echo "multiplicacao: ". calculadora(1,2, '*') . "<br>";




?>