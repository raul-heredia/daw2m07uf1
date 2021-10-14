<?php
		$file=$_FILES["fitxer"];
		echo "Has seleccionat el fitxer: ".basename($_FILES["fitxer"]["name"])."<br>";
		echo "PROPIETATS:<br>";
		foreach ($file as $index => $propietat) {
				echo "$index $propietat<br>";
		}
		exit(0);
?>
