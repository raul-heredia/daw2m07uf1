<html>
<head>
	<title>PARSING AMB VARIABLES</title>
</head>
	<body>
		<?php
			error_reporting(0);
			$moneda00="Euro";
			$moneda01="Dolar";
			$canvi=1.17;
			$quantitat00=500;
			$quantitat01=$canvi*$quantitat00;
			echo "Sense parsing --> $quantitat00 $moneda00s són $quantitat01 $moneda01s<br>";
			echo "Amb parsing --> $quantitat00 ${moneda00}s són $quantitat01 ${moneda01}s<br>";			
		?>		
	</body>
</html>
