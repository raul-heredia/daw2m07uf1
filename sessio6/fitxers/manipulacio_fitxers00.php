<?php
	echo "<b>CREANT UN FITXER I ESCRIVINT</b><br>";
	$name=$_POST["nom"];
	$filename="/var/www/html/fitxers/".$name;
	$texte="GLOUCESTER\n";
	$fitxer=fopen($filename,"w") or die ("No s'ha pogut crear el fitxer");
	fwrite($fitxer,$texte);
	$texte="Now is the winter of our discontent\n";
	fwrite($fitxer,$texte);
	fclose($fitxer);
	echo "El fitxer ".$_POST["nom"]." s'ha creat correctament i s'ha introduït la primerà linia del text<br>";	
?>
