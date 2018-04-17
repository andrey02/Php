<?php 
	include "conexaoPhp.php";

	$consulta = "select * from cliente";
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
?>	
