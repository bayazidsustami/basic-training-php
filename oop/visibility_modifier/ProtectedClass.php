<?php

class ProtectedClass{

     /**
     * properties is using protected visibility
     * and just can acces from child class
     * if you're using ['var'] keyword it sama you're using ['public']
     */
    protected string $properties;

    protected function getProperties(): void{
        $prop = $this->properties;
        echo "this function should cant access" . PHP_EOL;
    }
}