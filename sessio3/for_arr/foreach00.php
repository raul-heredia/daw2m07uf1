</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Funcions de comprovació de tipus</title>
</head>  
<body>  
<?php
	echo "<b><u>PROVES AMB FOREACH i ARRAYS</u></b></br>";
	//Array indexat i foreach
	$llista=array(2,5,8,9);
	echo "</br><b>Números i els seus dobles:</b></br>";
	foreach ($llista as $num) {
		$doble=$num*2;
		echo "El doble de $num és $doble</br>";
	}
	//Array associatiu i foreach utilitzant claus i  contingut
	echo "</br><b>Llistat de noms d'alumnes i números de matrícula:</b></br>";
	$matricula=array("Pere" => 9001, "Joan" => 19021, "Anna" => 9021);
	foreach ($matricula as $clau => $valor_clau) {
		echo "L'alumne $clau té el número de matrícula $valor_clau</br>";
	}
	//Array associatiu i foreach utilitzant només el contingut
	echo "</br><b>Llistat de números de matrícula:</b></br>";
	foreach ($matricula as $valor_clau) {
		echo "$valor_clau</br>";
	} 
?> 
</body>
</html>
