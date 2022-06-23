<?php

$array = [
    "firstName" => "Restu",
    "middleName" => "Alam",
    "lastName" => "bagaskara"
];

//Digunakan ketika melakukan konversi dari tipe data lain menjadi object dan sebaliknya
$object = (object)$array;

var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

//Konversi Object menjadi Array
$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Alam", "Meteseh");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);