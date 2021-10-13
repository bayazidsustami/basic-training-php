<?php

use Animals\Animal;
use Animals\Cat;
use Animals\Dog;
use Foods\AnimalFood;
use Foods\Food;

require_once("../data/Animal.php");
require_once("../data/Food.php");

interface AnimalShelter{
    function adopt(string $name): Animal;
}

class DogShelter implements AnimalShelter{
    function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

class CatShelter implements AnimalShelter{
    function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

$cat = new Cat();
$catShelter = new CatShelter();
$cat->eat(new AnimalFood());
var_dump($catShelter->adopt("tom"));

$dog = new Dog();
$dogShelter = new DogShelter();
$dog->eat(new Food());
var_dump($dogShelter->adopt("boy"));