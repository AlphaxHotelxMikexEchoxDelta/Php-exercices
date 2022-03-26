<?php
	
	echo "Saisir le nom du port: ";
	$PP = rtrim(fgets(STDIN));
	
	
	switch($PP){
		case strtolower("Quiberon"):
			$CC = "Morbihan";
			break;
		case strtolower("Sauzon"):
			$CC = "Morbihan";
			break;
		case strtolower("Le Palais"):
			$CC = "Morbihan";
			break;
		case strtolower("Concarneau"):
			$CC = "Finistere";
			break;
		case strtolower("Douarnenez"):
			$CC = "Finistere";
			break;
		case "Piriak-sur-mer":
			$CC = "loire-Atlantique";
			break;
		case "Pornic":
			$CC = "loire-Atlantique";
			break;
		case "Ilz-dYeu":
			$CC = "Vendee";
			break;
		default:
			$CC = False;
			break;
	}
	if ($CC == False){
		echo "cette ville n'est pas prise en compte !\n";
	}
	else {
		echo "le port: ", $PP, " a pour departement: ", $CC,"\n";
	}
	
?>






