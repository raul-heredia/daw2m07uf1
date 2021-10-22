<?php
	echo "<b>OBRINT EL FITXER EN MODE LECTURA I LLEGINT EL FITXER SENCER COM UN BLOC DE BYTES</b><br>";
	$filename="/var/www/html/fitxers/".$_GET["nom"];
	$fitxer=fopen($filename,"r") or die ("No s'ha pogut obrir el fitxer");
	$mida_fitxer=filesize($filename);
	$texte_llegit=fread($fitxer,$mida_fitxer);
	echo $texte_llegit."<br>";
	fclose($fitxer);	
?>
