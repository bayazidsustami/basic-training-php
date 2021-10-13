<?php

class Student{
    var string $id;
    var string $name;
    var int $grade;

    public function __clone()
    {
        unset($this->grade); // not clone
    }

    public function __toString()
    {
        return "$this->id, $this->name, $this->grade" . PHP_EOL;
    }
}