<?php

require_once "data/Animal.php";
require_once "data/Location.php";

use Data\{Animal, Cat, City, Dog};
use Data\Location;

$cat = new Cat();
$cat->name = "Kyo";
$cat->run();
$cat->stopRun();

$dog = new Dog();
$dog->name = "Loki";
$dog->run();

$jakarta = new City();
$jakarta->name = "Jakarta";
$jakarta->detectLocation();
