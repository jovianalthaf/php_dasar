<?php
require_once "data/Category.php";
require_once "data/Comment.php";
require_once "data/User.php";

use Model\User;

$user1 = new User("Jovian", 21);
$allProperties = $user1->getAll();
var_dump($allProperties);
// $comment = new Comment(); // objek

// $comment->setId(10);
// echo $comment->getId();



// $category = new Category(); 

// $category->setName("test");
// $category->setExpensive(true);

// $category->setName("");
// echo "Name : {$category->getName()}" . PHP_EOL;
// echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
