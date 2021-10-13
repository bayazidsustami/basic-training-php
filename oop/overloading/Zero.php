<?php

//overloading concept like meta programming in ruby
class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;   
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call function $name with arg $join" . PHP_EOL;
    }

    public function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call static function $name with arg $join" . PHP_EOL;
    }
}

$zero = new Zero();

$zero->firstName = "bay";
$zero->lastName = "by";
echo $zero->firstName . PHP_EOL;
echo $zero->lastName . PHP_EOL;

$zero->sayHello("bay", 123);
Zero::helloWorld("bays");
