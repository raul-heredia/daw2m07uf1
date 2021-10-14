<html>
<head>
	<title>PROVA DE PHP AMB L'ESTRUCTURA DE CONTROL FOREACH TREBALLANT AMB DADES GET (TAMBÉ VÀLID PER POST)</title>
</head>
	<body>
		<b><u>INICI DE LA PROVA DE ESTRUCTURA DE CONTROL FOREACH TREBALLANT AMB DADES GET (TAMBÉ VÀLID PER POST)</u></b><br>
		<?php	
			foreach ($_GET as $clau => $dada){
				//$_GET és un array associatiu
				//Cada posició s'identifica amb una clau. Cada clau té un nom assignat.				
				if ($clau == "Contrasenya") {
					echo "$clau: *****<br>";
				}
				else {
					echo "$clau: $dada<br>";
				}
			}
			echo "<br>";
		?>
		<b>FINAL DE LA PROVA DE L'ESTRUCTURA DE CONTROL FOREACH</b>
	</body>
</html>
