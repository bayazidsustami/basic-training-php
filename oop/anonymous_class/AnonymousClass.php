<?php

interface HelloWorld{
    public function sayHello(): void;
}

$helloWorld = new class("bays") implements HelloWorld{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void{
        echo "hello world $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();