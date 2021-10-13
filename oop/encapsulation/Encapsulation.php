<?php
require_once("Category.php");

$category = new Category();
$category->setName("bay");
$category->setExpensive(true);

echo "name : ". $category->getName() . PHP_EOL;
echo "expensive :" . $category->isExpesive() . PHP_EOL;