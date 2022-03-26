<?php
$Liste2 = array();
$Liste1 = array("Belle-Ile-en-Mere:15:8.3:Quiberon:Le Palais",
			 "Belle-Ile-en-Mere:24:9:Le Palais:Quiberon",
			 "Belle-Ile-en-Mere:16:8:Quiberon:Sauzon",
			 "Belle-Ile-en-Mere:17:7.9:Sauzon:Quiberon",
			 "Belle-Ile-en-Mere:19:23.7:Vannes:Le Palais",
			 "Belle-Ile-en-Mere:11:25.1:Le Palais:Vannes",
			 "Houat:25:8.8:Quiberon:Port St Gildas",
			 "Houat:30:8.8:Port St Gildas:Quiberon",
			 "Ile de Groix:21:7.7:Lorient:Port-Tudy",
			 "Ile de Groix:22:7.4:Port-Tudy:Lorient");


echo "code de liaison des secteurs de Houat:\n";

foreach($Liste1 as $cles){ 
	$explode = list( $nomSecteur, $codeLiaison, $distance, $portDepart, $portArrivee ) = explode( ":", $cles);
	if($nomSecteur == "Houat"){ array_push($Liste2, $codeLiaison); sort($Liste2); }
}

foreach($Liste1 as $cles){	echo " - ",$Liste2[$cles],"\n"; }


?>
