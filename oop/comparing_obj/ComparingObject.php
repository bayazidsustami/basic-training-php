<?php

require_once("../object_cloning/Student.php");

$student1 = new Student();
$student1->id = "1";
$student1->name = "bay";
$student1->grade = 3;

$student2 = new Student();
$student2->id = "1";
$student2->name = "bay";
$student2->grade = 3;

var_dump($student1 == $student2); //comparing all properties
var_dump($student1 === $student2); //comparing with reference

$objToString = (string)$student1;
var_dump($objToString);