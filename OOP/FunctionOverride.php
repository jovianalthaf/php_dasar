<?php
require_once "data/Manager.php";
$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");


$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");


$vp1 = new VicePresident();


$vp1->name = "Jovian";
$vp1->umur = 21;
$vp1->sayHello("Caca");
$vp1->age(22);
