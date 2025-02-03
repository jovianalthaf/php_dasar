<?php 
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;
require_once "data/Conflict.php";

require_once "data/Helper.php";

$conflict1 = new Conflict();
$conflict2 = new Conflict();

// echo Helper\APPLICATION . PHP_EOL;
// Helper\helpMe() . PHP_EOL;
echo APPLICATION . PHP_EOL;
helpMe();



?>