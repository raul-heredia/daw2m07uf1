<?php
	echo "<b>OBRINT EL FITXER EN MODE LECTURA I DESANT EL CONTINGUT DINS D'UN ARRAY DE STRINGS</b><br>";
	$filename="/var/www/html/fitxers/".$_GET["nom"];
	$fitxer=fopen($filename,"r") or die ("No s'ha pogut obrir el fitxer");
	if ($fitxer) {
	$mida_fitxer=filesize($filename);	
    $linia = explode(PHP_EOL, fread($fitxer,$mida_fitxer));
    //PHP_EOL="\n"
    //http://www.w3schools.com/php/func_string_explode.asp --> funció explode
	}	
	foreach ($linia as $cadena) {
		echo "$cadena</br>";
	}
	fclose($fitxer);
?>
