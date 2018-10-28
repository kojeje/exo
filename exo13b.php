<?php 
$tableau = [
"toto",
"blabla",
"vomi",
"php c trop bien !",
"j'aime pas les frites molles",
"picard"
];
$tableau[] = "baby-foot";
array_push($tableau, "pause");

for ($i=0; $i < count($tableau); $i++) { 
	echo $tableau[$i] . "\n";
}
// equivalent
foreach ($tableau as $element) {
 	# code...
  
	echo $element . "\n";
}
 ?>