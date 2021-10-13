<?php

/**
 * private can't access from any scope
 */

class PrivateClass{

    /**
     * properties is using private visibility
     * and can't acces from any class or scope
     * 
     * if you're using ['var'] keyword it sama you're using ['public']
     */
    private string $properties;

    private function getProperties(): void{
        $prop = $this->properties;
        echo "this function should cant access" . PHP_EOL;
    }

}