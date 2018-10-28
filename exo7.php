<?php
$total = 0;

//$compteur = 1 (valeur initiale) et  TANT QUE  $compteur <= 0, il augmente de 1
for ($compteur = 1 ; $compteur <= 30 ; $compteur++) {

    //$total = $total + $compteur;
    // EST INDENTIQUE À :
    $total += $compteur;
    echo $total . "<br/>";

}
?>
    <br/>
<?php
    $total = 0;
    $n = 1;
for ($compteur = 0 ; $compteur <= 16000 ; $compteur++ + ++$n) {

    $total += $compteur;
    echo $total . "<br/>";
}



?>
