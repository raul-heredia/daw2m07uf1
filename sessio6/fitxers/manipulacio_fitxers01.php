<?php
	echo "<b>AFEGINT DADES AL FINAL DEL FITXER</b><br>";
	if ($_POST["metode"]=="PUT"){
		$filename="/var/www/html/fitxers/".$_POST["nom"];
		$fitxer=fopen($filename,"a") or die ("No s'ha pogut obrir el fitxer 1");
		$texte="Made glorious summer by this sun of York;\n";
		fwrite($fitxer,$texte);
		fclose($fitxer);
		echo "S'ha afegit una nova linia de texte al fitxer ".$_POST["nom"]." <br>";
	}
	else{
		echo "ERROR 405 MÈTODE NO PERMÉS<br>";
		echo "No s'ha afegit una nova linia de texte al fitxer ".$_POST["nom"]." <br>";
	}
?>
