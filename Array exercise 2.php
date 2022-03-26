<?php
$Luu = array();
$Lii = array("Belle-Ile-en-Mere:15:8.3:Quiberon:Le Palais",
			 "Belle-Ile-en-Mere:24:9:Le Palais:Quiberon",
			 "Belle-Ile-en-Mere:16:8:Quiberon:Sauzon",
			 "Belle-Ile-en-Mere:17:7.9:Sauzon:Quiberon",
			 "Belle-Ile-en-Mere:19:23.7:Vannes:Le Palais",
			 "Belle-Ile-en-Mere:11:25.1:Le Palais:Vannes",
			 "Houat:25:8.8:Quiberon:Port St Gildas",
			 "Houat:30:8.8:Port St Gildas:Quiberon",
			 "Ile de Groix:21:7.7:Lorient:Port-Tudy",
			 "Ile de Groix:22:7.4:Port-Tudy:Lorient");

define("HH", count($Lii));

echo "code de liaison qui desservent le port de Quiberon:";


for($i=0; $i<HH; $i++){ 
	list( $nomS,$cod,$dis,$ppD,$ppA) = explode( ":", $Lii[$i]); 
	if($ppA == "Quiberon"){ array_push($Luu, $cod); sort($Luu); }
}


define("MM", count($Luu));
for($i=0; $i<MM; $i++){	echo "\n - ",$Luu[$i]; }


?>
