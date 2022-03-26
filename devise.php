<?php
$M = True;
while ($M == True){
		
		$G = True;
		while ($G == True){
			
		echo "Saisir la devise: ";
		$A = strtoupper(rtrim(fgets(STDIN)));

			Switch($A){
				
				case "USD":
					$T = 0.889 ;
					$G = False;
					break;
					
				case "USD":
					$T = 0.686 ;
					$G = False;
					break;
					
				case "USD":
					$T = 1.154 ;
					$G = False;
					break;
					
				case "USD":
					$T = 0.013 ;
					$G = False;
					break;
				
				default:
					echo "Devise inconnue !\n";
					break;
			}
		}

		$K = True;
		while ($K == True){
			echo "Saisir le prix en ", $T, " :";
			$R = rtrim(fgets(STDIN));

			if (is_numeric($R)){
				
				$O = $R*$T;
				echo "le prix en euros: ",$O,"€\n";
				$K = False;
				$M = False;
			}
			
			else{
				echo"valeur ne corespond pas a un prix!\n";
			}
		}


}
?>
