<?php
	$servidor ="localhost";
	$login = "root";
	$senha  = "";
	$banco = "andrei";

	$con = mysql_connect($servidor, $login, $senha); //conexão

	if($con != NULL) {
		$bd = mysql_select_db($banco);

		if($bd == NULL)
			echo "erro: acesso ao banco!";
		
	} else 
		echo "erro: acesso ao servidor";
	
  ?>
