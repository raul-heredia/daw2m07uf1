<?php
  if( $_POST["nom"] && $_POST["edat"] )
  {
     echo "Benvingut ". $_POST['nom']. "</br>";
     echo "Tens ". $_POST['edat']. " anys";
     exit(0);
  }
?>
