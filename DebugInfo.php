<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Bagas";
$student1->value = 80;
$student1->setSample("SAMPLE");

//
var_dump($student1);
