<?php
	$IVA=21;
	$ingredients=$_POST['ingr'];
	$pvp=((100+$IVA)/100)*(8+count($ingredients));
	if (empty($ingredients)) {
		echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
		exit(0);
	}
	else {
		echo "Has demanat la pizza bàsica amb:<br> ";
		foreach ($ingredients as $ingredient) {
				echo "* $ingredient<br>";
		}
		echo "El preu és $pvp € (IVA inclòs)<br>";
		exit(0);
	}
?>
