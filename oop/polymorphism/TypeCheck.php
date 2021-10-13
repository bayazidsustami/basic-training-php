<?php

require_once("Programmer.php");
require_once("BackendProgrammer.php");
require_once("FrontendProgrammer.php");

//type checking

function sayHello(Programmer $programmer): void{
    if($programmer instanceof FrontendProgrammer){
        echo "is programmer" . PHP_EOL;
    }else if($programmer instanceof BackendProgrammer){
        echo "is backend programmer" . PHP_EOL;
    }else if($programmer instanceof Programmer){
        echo "is frontend programmer" . PHP_EOL;
    }else{
        echo "is no programmer" . PHP_EOL;
    }
}

sayHello(new Programmer("bay"));
sayHello(new BackendProgrammer("bays"));
sayHello(new FrontendProgrammer("buy"));

