<?php 
//  Variante de l’exercice 7, on souhaite additionner uniquement les 30 premiers entiers pairs (privés de l’entier 0).
// Il faudra utiliser la fonction EstPair($nombre) qui a la valeur true si l’entier $nombre est pair, et false s’il est impair.

// $total = 0;



// for ($compteur = 2 ; $compteur<=15 ; $compteur++) { 
	// $total =$total + $compteur; 
	//  $total += $compteur;
	 // } 
// echo $total;


function EstPair ($nombre) {
	

	if ($nombre % 2 == 0 ) {
		return true;

		
	} else {
		return false;
	}


}
	$total=0;

	for ($compteur = 1; $compteur <= 30 ; $compteur++) { 
		if ( EstPair($compteur) ) {
			$total += $compteur;
		}
	}
	echo $total;






?>
