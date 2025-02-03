<?php 
require_once "helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();

// echo $mathHelper->name .PHP_EOL; gabisa menggakses dengan objek setelah menggunakan static

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Jovian Althaf sanjaya";
echo MathHelper::$name . PHP_EOL;


$result = MathHelper::sum(10,10,10,10);
echo "Result : $result";

?>