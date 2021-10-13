<?php

require_once("Manager.php");

class VicePresident extends Manager
{

    //union types
    private int|float $number;
    //function overriding or overwrite the function in parent class
    function runTheShow(): void
    {
        //parent keyword to access the function override (like super in java or kotlin)
        parent::runTheShow();
        echo "do your job by vice president" . PHP_EOL;
    }
}
