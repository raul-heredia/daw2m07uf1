<?php
	echo "TREBALLANT AMB RECURSIVITAT<br>";
	function factorial($n) {
		if ($n==0) return 1;
		else return $n * factorial($n - 1);
	}
	for ($i = 0;$i <= 10;$i++){
		echo $i."! = ".factorial($i)."<br>";
	}	
?>
