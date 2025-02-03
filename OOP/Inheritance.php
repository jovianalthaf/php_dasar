<?php 
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Jovian";
$manager->sayHello("caca");


$vp = new VicePresident();

$vp->name = "caca";
$vp->sayHello("jovian");
?>