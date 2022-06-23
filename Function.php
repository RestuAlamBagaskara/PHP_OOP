<?php

require_once "data/Person.php";

$ALam = new Person("ALam", "Subang");

//mengakses properties name dari class Person
$ALam->name = "ALam";

//mengakses fungsi sayHello dar[] class Person
$ALam->sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);