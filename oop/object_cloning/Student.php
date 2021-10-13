<?php

class Student{
    var string $id;
    var string $name;
    var int $grade;

    public function __clone()
    {
        unset($this->grade); // not clone
    }
}