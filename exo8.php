<?php 
 

function EstPair ($nombre) {
// si le modulo de $nombre/2 est egale à 0
	if ( ($nombre % 2) == 0 ) {
		// alors afficher "$nombre est pair" et sauter une ligne
		echo $nombre. " est pair ". "<br/>";
	} 
	// Sinon
	else {
		// alors afficher "$nombre est impair" et sauter une ligne
		echo $nombre. " est impair ". "<br/>";
	}


}

// Appliquer fonction EstPair si $nombre = :
// 2
EstPair(2);
// 3
EstPair(3);
// etc.
EstPair(21);
EstPair(16);
EstPair(78);
EstPair(90);


function additionne($nb1,$nb2) {
	echo $nb1 + $nb2;
}

additionne()


?>
