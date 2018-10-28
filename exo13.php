<?php 



function calc_h_mn_s($tot_s){
	$rest_s =$tot_s % 3600;

$h = floor ($tot_s / 3600);
$mn = floor ($rest_s / 60);
$s = $rest_s % 60;
echo $h . " h" . ":". $mn . " mn" . ":" . $s . " s" . "<br/>";}


 calc_h_mn_s (347872);
 calc_h_mn_s (56780987);
 calc_h_mn_s (5654321009876)
 ?>