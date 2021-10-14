<html>
<head>
	<title>PROVA DE PHP AMB L'ESTRUCTURA DE CONTROL WHILE I FORMULARI</title>
</head>
	<body>
		<b><u>INICI DE LA PROVA DE ESTRUCTURA DE CONTROL WHILE I FORMULARI</u></b><br>
		<?php
			if ($_GET["vinic"] && $_GET["vfin"]) {
				$x = $_GET["vinic"];
				while ( $x <= $_GET["vfin"]){
					echo "$x és menor o igual a ".$_GET["vfin"]."<br>\n";
					$x++;
				}
			}
		?>
		<b>FINAL DE LA PROVA DE L'ESTRUCTURA DE CONTROL WHILE</b>
	</body>
</html>
