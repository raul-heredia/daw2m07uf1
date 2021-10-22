<?php
	// Treballant amb cookies. Debian versió 11 PHP 7.4.21 Apache 2.4.48 
	// /etc/php/7.3/apache2/php.ini --> Línia 1356 --> session.use_cookies = 1 --> reinicia apache2
	$nom_cookie = "usuari";
	$valor_cookie = "Jaume Pons";
	#
	# CREACIÓ DE LA COOKIE
	#
	setcookie($nom_cookie, $valor_cookie,time() + (86400 * 30), "/"); // 86400 = 1 dia
	#
	# setcookie --> Creació i modificació de cookies
	# Ha de ser cridada abans de qualsevol HTML
	# Una cookie s'envia en el header del missatge HTTP
	# El header està abans que el body del missatge HTTP
	# El codi HTML s'envia en el body del missatge HTTP	
?>
<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Creant Cookies amb PHP</title>
    </head>
	<body>
		CREANT COOKIES. TREBALLANT AMB $_COOKIE<br>
		<?php
			if(!isset($_COOKIE[$nom_cookie])) echo "La cookie anomenada ".$nom_cookie." encara no té una assignació<br>"; #Durant la primera connexió, el client no té cap cookie emmagatzemada encara
			else {
				echo "La cookie anomenada ".$nom_cookie." té ara una assignació<br>";
				echo "El valor emmagatzemat és: ".$_COOKIE[$nom_cookie]."<br>";# A partir de la segona connexió, el client sí té una cookie emmagatzemada
			} 
		?>
	</body>
</html> 
