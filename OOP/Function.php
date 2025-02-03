<?php 
require_once "data/Person.php";
// init object from class person
$jovian = new Person("Jovian","alamat");

$jovian->name = "Jovian"; // $this access $jovian->name;
$jovian->sayHello("eko"); 


$joko = new Person("Jovian","alamat");

$joko->name = "Joko";
$joko->sayHello(null);

$kemayoran = new Person("Jovian","alamat");

$kemayoran->address = "kemayoran";
// if parameter in checkAddress is null, check $kemayoran->address then if checkAddress parameter have values 
$kemayoran->checkAddress(null);
?>