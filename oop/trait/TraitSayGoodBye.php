<?php

namespace Traits;

//we can inherit trait using other trait by keyword 'use'
trait SayGoodBye
{
    function goodbye(?string $name): void
    {
        if(is_null($name)){
            echo "Good bye" . PHP_EOL;
        }else{
            echo "Good bye $name" .PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name): void
    {
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" .PHP_EOL;
        }
    }
}

trait HasName{
    var string $name;
}

trait CanRun{
    public abstract function run(): void;
}

class Person{
    use SayGoodBye, SayHello, HasName, CanRun {
        hello as private;
        goodbye as private;
    }

    function run(): void
    {
        echo "go go run" . PHP_EOL;
    }

    //override traits
    function goodbye(?string $name): void
    {
        echo "override goobye in person class" . PHP_EOL;
    }

    function hello(?string $name): void
    {
        echo "override hello in person class" . PHP_EOL;
    }
}