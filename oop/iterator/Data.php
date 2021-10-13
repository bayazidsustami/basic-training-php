<?php

class Data implements IteratorAggregate{
    var string $firstName = "bay";
    private string $lastName = "amy";
    protected int $age = 24;

    function getIterator()
    {
        /*
        $array = [
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "age" => $this->age
        ];
        $iterator = new ArrayIterator($array);
        return $iterator;*/

        //yield can generate to array
        yield "firstName" => $this->firstName;
        yield "lastName" => $this->lastName;
        yield "age" => $this->age;
    }
}

$data = new Data();

foreach($data as $property => $value){
    echo "$property : $value " . PHP_EOL;
}