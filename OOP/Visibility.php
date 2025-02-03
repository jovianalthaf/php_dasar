<?php 
require_once "data/Product.php";

$product = new Product("Tas",2000);

// 
// echo $product->getName() . PHP_EOL;
// echo $product->getPrice() . PHP_EOL;


echo $product->getAllData() .PHP_EOL;
$dummy = new ProductDummy("Dummy",1000);
$dummy->info();
?>