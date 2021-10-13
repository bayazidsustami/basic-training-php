<?php
namespace Animals;

require_once("Animal.php");
require_once("Food.php");

use Foods\AnimalFood;
use Foods\Food;

abstract class Animal{
    public string $name;

    abstract public function run(): void;
    abstract public function eat(AnimalFood $food): void;
}

class Cat extends Animal{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $food): void
    {
        echo "cat is eating" . PHP_EOL;   
    }
}

class Dog extends Animal{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    //contravariant
    public function eat(Food $food): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}