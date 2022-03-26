<?php

define("POIDSMAX", 20);

echo "saisir le nombre de passager : ";
$nbpassager = rtrim(fgets(STDIN));

echo "saisir le poids total pour ",$nbpassager," passagers : ";
$Spoids = rtrim(fgets(STDIN));

$MAXpoids = $nbpassager * POIDSMAX ;

if ($Spoids <= $MAXpoids){
	echo"poids maxe autoriser (",$Spoids,")\n";
}

else {
	echo "poids total superieur au max autoriser (",$MAXpoids,")\n";
	
	do {
		echo "\n kilo a retirer : ";
		$klm = rtrim(fgets(STDIN));

		$Spoids -= $klm;
		print_r($Spoids);
		
	} while ($Spoids > $MAXpoids);
	
echo"poids maxe autoriser (",$Spoids,")\n";
}
?>
