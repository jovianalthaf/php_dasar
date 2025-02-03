<?php
require_once "data/Person.php";
// init object from class person
$person = new Person("Jovian", "Jakarta");
$person->country = "Indonesia";
echo "Name : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "country : {$person->country}" . PHP_EOL;
// var_dump($person1);
$person2 = new Person("Caca", "Jakarta");

$person2->country = "Indonesia";
var_dump($person2);

// set default value
$person3 = new Person("Nama null", "");


var_dump($person3);

// access function 
$person->sayHello("jovian");
