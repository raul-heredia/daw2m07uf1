<html>
<head>
	<title>PROVA DE PHP AMB L'ESTRUCTURA DE CONTROL FOR I FORMULARI. DIFERÈNCIA ENTRE "$x" I '$x'</title>
</head>
	<body>
		<b><u>INICI DE LA PROVA DE ESTRUCTURA DE CONTROL FOR I FORMULARI. DIFERÈNCIA ENTRE "$x" I '$x'</u></b><br>
		<?php
			if ($_GET["vinic"] && $_GET["vfin"]) {
				$x = $_GET["vinic"];
				for ($x = $_GET["vinic"]; $x <= $_GET["vfin"]; $x++) {
					echo "El valor actual de ".'$x'." és: "."$x<br>\n"; # DIFERÈNCIA ENTRE "$x" I '$x'
				}
			}
		?>
		<b>FINAL DE LA PROVA DE L'ESTRUCTURA DE FOR</b>
	</body>
</html>
