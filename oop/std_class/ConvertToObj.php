<?php

//stdClass

$array = [
    "firstName" => "Bay",
    "lastName" => "Amy"
];

$obj = (object)$array;

var_dump($obj);

var_dump($obj->firstName);
var_dump($obj->lastName);

$objToArray = (array)$obj;
var_dump($objToArray);