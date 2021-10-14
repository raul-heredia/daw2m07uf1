</html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Funcions variables</title>
</head>  
<body>  
<?php
	function preu_venda_public($preu) {
		$pvp=$preu*1.21;
		return $pvp;
	}
	function pvp_descompte($desc,$preu) {
		$pvp=($preu*(1-($desc/100)))*1.21;
		return $pvp;
	}
	$preu=20;
	$desc=5;
	$tipus="pvp_descompte";
	$pvp=$tipus($desc,$preu);
	echo "Preu de venda al Públic amb descompte: $pvp €</br>";
	$tipus="preu_venda_public";
	$pvp=$tipus($preu);
	echo "Preu de venda al Públic: $pvp €</br>";
?>
</body>
</html>
