<?php
	if (isset($_COOKIE['compte'])) {
		echo "Esborrant la cookie nom<br>";				
		setcookie("compte","",time()-3600);
		//Per treballar amb les cookies de cookie02.php
		//Per comprovar que s'ha esborrat refresca (tanca i torna a obrir
		//la llista de cookies dins del navegador		
	}
	if (isset($_COOKIE['nom'])) {
		echo "Esborrant la cookie compte<br>";
		setcookie("nom","",time()-3600);
		//Per treballar amb les cookies de cookie02.php
		//Per comprovar que s'ha esborrat refresca (tanca i torna a obrir
		//la llista de cookies dins del navegador				
	} 
?>
<html>
    <head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Esborrant cookies</title>
    </head>
    <body>
		ESBORRANT COOKIES<br>
		<?php
			date_default_timezone_set('Europe/Andorra');
			echo "Hora: ".date('d/m/Y h:i:s')."<br>";
		?>
    </body>
</html>
