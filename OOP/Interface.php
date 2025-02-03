<?php
require_once "data/Car.php";
require_once "data/User.php";
require_once "data/Worker.php";

// use Data\{Avanza};
use Model\Admin;
use Model\Engineer;
use Model\Worker;
use Model\Airplane;

$engineer = new Engineer("jovian", "Software Engineer");
$engineer->startWork();
$engineer->endWork();

// $jet = new Airplane("A021");
// $jet->move();
// $jet->fly();
// $jet->setName("a222");
// var_dump($jet->getName());
// $jet->move();
// $jet->fly();



// $admin1 = new Admin("Jovian", 31);
// var_dump($admin1->getAll());
// $car = new Avanza();

// $car->drive();
