<?php 
$a = [ 
    "first_name" => "Jovian",
    "last_name" => "Althaf",
];

$b = [
    "last_name" => "Althaf",
    "first_name" => "Jovian",
];

var_dump($a == $b);
var_dump($a === $b);


?>