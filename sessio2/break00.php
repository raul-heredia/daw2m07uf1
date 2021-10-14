<html>
<head>
	<title>PROVA DE PHP AMB BREAK</title>
</head>
	<body>
		<b><u>INICI DE LA PROVA AMB BREAK</u></b><br>
		<?php
			echo "<br> break finalitza una estrucutura de control i va a la següent instrucció del codi PHP<br><br>";
			foreach ($_GET as $clau => $dada){
				if ($clau == "") break;
				//Finalitza i salta l'estructura if.
				//break accepta un valor numèric que per defecte és 1. El valor indica quantes estrucutures de control finalitza i salta
				else echo "$clau: $dada<br>";
			}
			echo "<br>";
		?>
		<b>FINAL DE LA PROVA DE L'ESTRUCTURA DE CONTROL FOREACH</b>
	</body>
</html>
