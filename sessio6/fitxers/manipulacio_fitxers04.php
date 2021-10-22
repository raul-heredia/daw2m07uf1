<?php
	echo "<b>ESBORRANT UN FITXER</b><br>";
	if ($_POST["metode"]=="DELETE"){
		$filename="/var/www/html/fitxers/".$_POST["nom"];
		if (file_exists($filename)){
			unlink($filename);
			echo "El fitxer $filename ha estat esborrat<br>";
		}
		else echo "El fitxer $filename no existeix<br>";
	}
	else{
		echo "ERROR 405 MÈTODE NO PERMÉS<br>";
		echo "No s'ha esborrat el fitxer ".$_POST["nom"]." <br>";
	}
?>
