<?php

function sayHello(Programmer $programmer): void{
    echo "Hello programmer {$programmer->name}" .PHP_EOL;
}