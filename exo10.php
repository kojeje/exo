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
<?php

    function factorielle($nombre) {
        $resultat = 1;
        for($i = 1; $i< $nombre; $i++) {
            $resultat *= $i;
        }
        return $resultat;
    }

    echo factorielle(5);

    for ($i = 2 ; $i < 9 ; $i+=2) {

        echo    factorielle($i) . "<br/>";

    }

    foreach ($array=[1,2,3,4,5,8,9,11]){

        echo    factorielle($i) . "<br/>";

    }

    factorielle (11);
    factorielle (9);


?>


<?php

    function factorielle($nombre) {
        $total = 1;
        for ($i = $nombre; $i >= 1; $i--) {
            $total *= *i;
        }
        return $total; . "\n";


        function autre_factorielle($nombre) {

            if ($nombre == 1) {
                return 1;
            }
            return $nombre * autre_factorielle(*nombre - 1);
	}
        echo factorielle(5);
        echo "\n-----\n";
        echo autre_factorielle(5);



        ?>