<?php 
// 16 Jeu : nombre mystère
// Il s’agit d’écrire un programme qui permette à un utilisateur de deviner un nombre compris entre 0 et 1000. 
// Le nombre à deviner est généré automatiquement par la fonction PHP existante rand($min, $max) qui calcule un nombre aléatoire compris entre $min et $max.

// Le joueur propose un nombre. Si le nombre proposé est plus petit (resp. plus grand) que le nombre à deviner, le programme devra afficher un message d’erreur du type « Le nombre que vous proposez est trop petit » (resp. « ... trop grand »). 

// Tant que l’utilisateur n’aura pas trouvé le bon nombre, le programme lui demandera d’entrer une nouvelle valeur.

	$value_to_guess = rand(0, 10);
	echo "Bonjour, choisis entre 0 et 1000 : ";
	echo "\n";

	$handle = fopen("php://stdin","r");
	$value_user = fgets($handle);

	while (true) {
		

		if ($value_user == $value_to_guess) {
			echo "Bravo ! ";
			break;
		} elseif ($value_user < $value_to_guess) {
			echo "Trop ptit !";
			echo "\n";
		} elseif ($value_user > $value_to_guess) {
			echo "Trop gland !";
			echo "\n";	
		} else {
			// ne devrait jamais arriver
		echo "mauvaise entrée";
		break;
		}
		$handle = fopen("php://stdin","r");
		$value_user = fgets($handle);
	}
 ?>