<?php 
// Ecrire le programme qui calcule la valeur factorielle d’un nombre. Par exemple, 5! = 5*4*3*2*1 correspond à la valeur factorielle du nombre 5. Le principe est le même que celui de l’exercice 5.

	function fact($nombre){
		// si $nombre n'est pas entier
		$total = 1;
		for ($i=$nombre; $i >= 1 ; $i--) { 
			$total *= $i;
		}

		echo $total." /n"."<br/>";
		if ( !is_int($total) ) {
			echo "Va te faire foutre !"."<br/>";
			return false;
		}
		
				
		

	}

	

fact(5);
fact(23.56);
fact(1.456);
fact(8);
fact(6);




?>
