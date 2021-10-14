</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Arrays muldimensionals - I</title>
</head>  
<body>  
<?php
	#cas 1 array unidimensional
	$vector=array(3,2,5);
	echo "<b>Contingut i estrucutura del vector -->  </b>";
	var_dump($vector); #var_dump és una funció útil per veure la estructura, tipus i continguts d'una variable. És útil per fer depuració dels programes
	echo "<br>";
	echo "<b>Contingut de la posició 0 del array: </b>".$vector[0]."<br>";
	echo "##########<br>";
	#
	#cas 2 array multidimensional inicitalitzat
	$matriu=array(array(1,2,3),array(7,9,0),array(6,-1-2));
	echo "<b>Contingut i estrucutura de la matriu -->  </b>";
	var_dump($matriu);
	echo "<br>";
	echo "<b>Contingut de matriu[0][1]: </b>".$matriu[0][1]."<br>"; 
	echo "##########<br>";
	#
	#cas 3 declaració d'array multidimensional sense inicialització
	$matriu2=array();
	$matriu2[0]=array();
	$matriu2[1]=array();
	echo "<b>Contingut i estrucutura de la matriu2 -->  </b>";
	var_dump($matriu2);
	echo "<br>";
	echo "<b>Contingut de matriu2[0][1]: </b>".$matriu2[0][1]."<br>";
	$matriu2[0][1]=3;
	echo "<b>Contingut de matriu2[0][1] amb un valor: </b>".$matriu2[0][1]."<br>"; 	
?> 
</body>
</html>
