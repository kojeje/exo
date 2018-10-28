<?php 
$duree=75654; // en secondes

 function stime($duree){
$heures=intval($duree / 3600);
$minutes=intval(($duree % 3600) / 60);
$secondes=intval((($duree % 3600) % 60));

echo $heures." h ".$minutes." mn ".$secondes." s "."<br/>";
}
stime(567);
stime(5678);
stime(56);
stime(127);
stime(360);

?>

