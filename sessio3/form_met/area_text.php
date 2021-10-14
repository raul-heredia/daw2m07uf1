<?php
   if( ($_POST["nom"]=="Joan") && ($_POST["ctsnya"]=="qwerty2015") ) {
     echo "Benvingut ". $_POST['nom']. "</br>";
	 if( $_POST["missatge"]) {
		echo "El teu missatge per ".$_POST["receptor"]." és: <br>";
		echo "<textarea rows=10 cols=70>".$_POST["missatge"]."</textarea><br>"; 
		exit(0);
	 }
	 else {
		 echo "No has escrit cap missatge<br>";
		 exit(1);
	 }	
  }	
  else {
	  echo "Contrasenya incorrecta<br>";
	  exit(2);
  }	
?>
