<?php
$ListeFinal = array();
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

echo "les ports de depart et d'arrivee sont :\n";

foreach($Liste1 as $cles){ 
	list( $nomSecteur , $codeLiaison , $distance , $portDepart , $portArrivee ) = explode( ":", $cles); 
	array_push($Liste2, $portDepart,$portArrivee); sort($Liste2);
}
array_push($Liste2, "XXXXX"); //ceci est une triche, mais dans les regles de l'arts


for($i=0; $i<count($Liste2)-1; $i++){ 
	if($Liste2[$i] != $Liste2[$i+1]){ array_push($ListeFinal, $Liste2[$i]); sort($Liste2); sort($ListeFinal); }
}

foreach($ListeFinal as $cles){ echo " -",$cles,"\n"; }




?>
