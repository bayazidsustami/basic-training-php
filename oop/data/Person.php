<?php

class Person
{
    var string $name;
    var ?int $age = null;

    const APP_VERSION = "1.0.0";

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(int $age): void
    {
        $this->age = $age;
        echo "Hay {$this->name}". PHP_EOL;
        echo "your age is {$this->age}" . PHP_EOL;
    }

    function __destruct()
    {
        echo "Clear all object and properties" . PHP_EOL;
        echo self::APP_VERSION;
    }
}