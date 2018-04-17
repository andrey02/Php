<?php
	
                   $numero1 = array(10,11,12);
                   $numero2 = array(50,60,70);	
                   
                        
                    $count = count($numero1);
                
                    for($i = 0; $i < $count; $i++) {
                    	$numero3[$i] = $numero1[$i] + $numero2[$i]; 
                    }     			
 	                
                	print_r($numero3);
               
                	
    
?>