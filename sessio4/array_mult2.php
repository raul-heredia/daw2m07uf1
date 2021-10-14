</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Arrays muldimensionals - II</title>
</head>  
<body>  
<?php
	//Array unidimensional associatiu. Accés a una posició de l'array. Afegir una posició.
	echo "<u>ARRAY UNIDIMENSIONAL ASSOCIATIU.</u><br>";
	$mitjanes=array("Pons" => 3, "Peris" => 7, "Ramírez" => 6);
	echo "Accés a una posició existent: ".$mitjanes["Pons"]."<br>";
	$mitjanes["Llopis"] = 9; # Amb aquesta assignació s'afegeix la posició Llopis amb el valor 9
	echo "Accés a una posició afegida: ".$mitjanes["Llopis"]."<br>";
	echo "<hr>";
	//
	//Array multidimensional associatiu - I. Accés a una posició de l'array. Afegir una posició
	echo "<u>ARRAY MULTIDIMENSIONAL ASSOCIATIU - I: ARRAY INDEXAT DINS D'ARRAY ASSOCIATIU</u><br>";
	$notes_classe = array( "Pons" => array(5,0,4), "Peris" => array (9,4,8), "Ramírez" => array(7,7,4));
	echo "Posició 2 de l'array indexat de la posició Pons de l'array associatiu: ".$notes_classe["Pons"][2]."<br>";
	$notes_classe["Llopis"]=array(7,4,8,10,5); # A cada posició, l'array indexat pot ser d'una dimensió diferent
	echo "Posició 3 de l'array indexat de la posició Llopis de l'array associatiu: ".$notes_classe["Llopis"][3]."<br>";
	echo "<hr>";
	//
	//Array multidimensional associatiu - II
	echo "<u>ARRAY MULTIDIMENSIONAL ASSOCIATIU - II: ARRAY ASSOCIATIU DINS D'ARRAY ASSOCIATIU</u><br>";
	$notes_classe = array(
						"Pons" => array("m1" => 5, "m2" => 0, "m3" => 4),
						"Peris" => array("m1" => 9,"m2" => 4,"m3" => 8),
						"Ramírez" => array("m1" => 7,"m2" => 7,"m3" => 4)
					);
	echo "Posició m3 de la posició Pons: ".$notes_classe["Pons"]["m3"]."<br>";
	$notes_classe["Llopis"]=array("m1" => 7, "m2" => 9, "m3" => 6);
	echo "Posició m1 de la posició Llopis: ".$notes_classe["Llopis"]["m1"]."<br>";
?> 
</body>
</html>


