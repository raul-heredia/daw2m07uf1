<!doctype html>
<html lang="ca">
	<head>
		<title>Exemple de recursivitat: Llegint un arbre de fitxers i directoris</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<h1>Exemple de recursivitat: Llegint un arbre de fitxers i directoris</h1>
		<?php
			#####################
			# VARIABLES GLOBALS #
			#####################
			$nomDirectori="/var/www/html";
			#
			############
			# FUNCIONS #
			############
			function llegeixDirectori($nomDir) {
			  // - Obrint el directori i inicialitzant un array per desar els noms de fitxers i directoris 
			  if (!( $dir = opendir($nomDir))) die("Can't open $nomDir");
			  $nomsFitxersSubdirs = array();
			  # - Llegeixo el contingut del directori ignorant  '.' i '..'
			  # - Afegeixo el caràcter '/' al final dels noms de subdirectoirs per diferenciar-los dels fitxers estàndard.
			  # - Afegeixo tots els fitxers i subdirectoris dins de l'array $nomsFitxersSubdirs
			  while ($nomFitx = readdir($dir)) {
				if ($nomFitx != '.' && $nomFitx != '..') {
				  if (is_dir( "$nomDir/$nomFitx" )) $nomFitx .= '/';
				  $nomsFitxersSubdirs[] = $nomFitx; #Afegeixo un nou element a l'array $nomsFitxersSubdirs[]
				}
			  }
			  closedir ($dir); # És important tancar fitxers i directoris després d'utlitzar-los.
			  # - Visualització dels noms de subdirectoris i fitxers.
			  # - PROCESSAMENT RECURSIU DELS SUBDIRECTORIS!!!!!!!!!!!!!!!!!!!!!!!!!!!
			  echo "<ul>";
			  foreach ( $nomsFitxersSubdirs as $nomFitx ) {
				echo "<li>$nomFitx";
				# - La funció substr( $nomFitx, -1 ) == '/' retorna el un caràcter començant pel final. Per tant, si és un directori retorna un '/' 
				# - CRIDO RECURSIVAMENT a llegeixDirectori !!!!!!!!!!!!!!!!!
				# - La funció substr( $nomFitx, 0, -1 ) retorna un string de la posició 0 de $nomFitx
				#   i omitint 1 caràcter des del final, o sigui, agafa el nom del subdirectori
				#   sense el '/'
				if ( substr( $nomFitx, -1 ) == '/' ) llegeixDirectori( "$nomDir/" . substr( $nomFitx, 0, -1 ) );
				echo "</li>";
			  }
			  echo "</ul>";
			}
			#
			########
			# MAIN #
			########
			echo "<h2>Contents of '$nomDirectori':</h2>";
			llegeixDirectori( $nomDirectori );
		?>
	</body>
</html>
