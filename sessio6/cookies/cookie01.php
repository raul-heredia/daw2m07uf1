<?php
	$nom_cookie = "usuari";
	$valor_cookie = "Jaume Pons";
	setcookie($nom_cookie, $valor_cookie);
?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Creant Cookies amb PHP</title>
    </head>
	<body>
		CREANT COOKIES. TREBALLANT AMN $_COOKIE<br>
		<?php
			if(!isset($_COOKIE[$nom_cookie])) echo "Hola. Aquesta és la teva primera visita";
			else echo "Hola ".$_COOKIE[$nom_cookie]." Gràcies per tornar a visitar-nos";
		?>
	</body>
</html> 
