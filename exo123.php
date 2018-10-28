<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// depuis PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>
