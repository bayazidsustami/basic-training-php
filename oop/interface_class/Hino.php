<?php

require_once("Car.php");

class Hino implements Car{
    function drive(): void
    {
        echo "drive hino" . PHP_EOL;
    }

    function getTire(): int
    {
        return 6;
    }

    function getBrand(): string
    {
        return "Hino";
    }
}