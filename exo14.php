<?php 

	$array = [
		14,
		12,
		-3,
		6,
		9832,
		0, 
		32,
		9
	];


for ($i = 0 ; $i < count($array) ; $i++) { 

	if ($i == 0) {
		$min_value = $array[$i];	
	}
	if ($array[$i] < $min_value) {
		$min_value = $array[$i];
	}

	
}

echo "La plus petite valeur du tableau est : " . $min_value;
	

 ?>