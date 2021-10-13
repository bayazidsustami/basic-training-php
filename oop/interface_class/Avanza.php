<?php

require_once("Car.php");

class Avanza implements Car{
    function drive(): void
    {
        echo "drive avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string
    {
        return "Toyota";
    }
}