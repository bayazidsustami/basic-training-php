<?php

/**
 * we can access properties or function without instatiate
 */

class AppHelper{
    static public string $name = "Test App";

    static public function getVersionApp(): string{
        return "1.0.0";
    }
}

echo AppHelper::$name . PHP_EOL;
echo AppHelper::getVersionApp() . PHP_EOL;