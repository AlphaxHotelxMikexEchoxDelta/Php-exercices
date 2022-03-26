<?php

	define ("ADLT_GRP", 15);
	define ("ADLT_SL", 18);
	$NmbGRP = 0;
	
	echo "bienvenu! ceci sont nos tarifs: \n";
	echo "\n";
	echo "--------1---------\n";
	echo "18€ par Adultes\n";
	echo "--------2---------\n";
	echo "15€ pour les grp de 7(minm)\n";
	echo "\n";
	echo "\n";
	echo "Saisir le nombre d'Adultes: ";
	$NombrePRS = rtrim(fgets(STDIN));
	
	while ($NombrePRS >= 7) {
		$NombrePRS = $NombrePRS - 7;
		$NmbGRP = $NmbGRP + 1;
	}

	$NmbGRP1 = $NmbGRP * 7;
	
	echo "il y a ", $NmbGRP, " groupe, de ", $NmbGRP1, " personnes\n";
	echo "le nombre de personnes seul est de: ", $NombrePRS, " personnes\n";
	
	$Calcc1 = $NmbGRP1 * 15;
	$Calcc2 = $NombrePRS * 18;
	$Resultat = $Calcc1 + $Calcc2;
	
	echo "le montant total est de: ", $Resultat, "€\n";

?>
