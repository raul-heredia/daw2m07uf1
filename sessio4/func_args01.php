</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Arguemts (o paràmetres) per referència</title>
</head>  
<body>  
<?php
	function intercanvi1($a,$b) {
		$temp=$a;
		$a=$b;
		$b=$temp;
		echo "Dins de la funció: $a - $b</br>";
	}
	function intercanvi2(&$a,&$b) {
		$temp=$a;
		$a=$b;
		$b=$temp;
		echo "Dins de la funció: $a - $b</br>";
	}
	function afegir1($a,$b) {
		$a.=" $b"; //$a = $a.$b
		echo "Dins de la funció: $a</br>";
	}
	function afegir2(&$a,$b) {
		$a.=" $b"; //$a = $a.$b
		echo "Dins de la funció: $a</br>";
	}
	$v1=3;
	$v2=5;
	$cadena1="Hola";
	$cadena2="món";
	intercanvi1($v1,$v2);
	echo "Fora de la funció: $v1 - $v2</br>";
	intercanvi2($v1,$v2);
	echo "Fora de la funció: $v1 - $v2</br>";
	echo "</br>";
	afegir1($cadena1,$cadena2);
	echo  "Fora de la funció: $cadena1</br>";
	afegir2($cadena1,$cadena2);
	echo  "Fora de la funció: $cadena1</br>";
?>
</body>
</html>
