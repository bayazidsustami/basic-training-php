<?php

class PublicCalss{
    /**
     * properties is using public visibility
     * and it can access from any scope
     * if you're using ['var'] keyword it sama you're using ['public']
     */
    var string $properties;

    public function getProperties(): void{
        $prop = $this->properties;
        echo "this function should cant access" . PHP_EOL;
    }
}