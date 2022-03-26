<?php
$Y=False;
while($Y == False){

$Cpt1 = rand(0,50);
$Cpt2 = rand(0,50);
$Cpt3 = rand(0,50);


echo "Capteur 1: ",$Cpt1, "° ";
echo "Capteur 2: ",$Cpt2, "° ";
echo "Capteur 3: ",$Cpt3, "° ";

$calcule1 = $Cpt1 + $Cpt2 + $Cpt3;
$moyenCPT = $calcule1/3;
echo "	MoyenCPT: ",number_format($moyenCPT, 2), "° \n";
sleep(1);


if ($moyenCPT <20){ echo"chaudiere: ON "; }
else{ echo "chaudiere: OFF	 ";}

if ( $moyenCPT>	35 ){ echo"Fenetre: ON \n"; }
else{ echo "Fenetre OFF \n";}

sleep(1);

}
?>
