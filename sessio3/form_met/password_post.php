<?php
  if( ($_POST["nom"]=="Joan") && ($_POST["ctsnya"]=="qwerty2015") ) {
     echo "Benvingut ". $_POST['nom']. "</br>";
     exit(0);
  }
  else {
	  echo "No tens permís per accedir a aquesta web<br>";
	  exit(1);
  }
?>
