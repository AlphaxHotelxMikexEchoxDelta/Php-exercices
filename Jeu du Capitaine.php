<?php

$RR = rand(1 , 100);
$GG = 0;
echo "saisir un nombre (1 - 100): ";
$SS = rtrim(fgets(STDIN));

while($SS != $RR && $SS != "0"){
	
	if (is_numeric($SS)==True){
			switch($SS){
				case $SS>$RR:
					echo "trop grand ! \n (0 pour abandonner)\n"; 
					$GG+=1;
					break;
				case $SS<$RR:
					echo "trop petit ! \n (0 pour abandonner)\n"; 
					$GG+=1;
					break;		}}
		
	else{ echo "saisi incorrect!\n"; }
	
	echo "saisir un nombre (1 - 100): ";
	$SS = rtrim(fgets(STDIN));

}
if ($SS == $RR){ echo "\n\nfelicitation ! seulment ", $GG," essais\n"; }
else { echo "jeu abandonner (0 saisi par lutilisateur)\n"; }

?>
