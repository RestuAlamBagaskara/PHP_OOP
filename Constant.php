<?php

require_once "data/Person.php";

//Membuat constant dengan cara lama
define("APPLICATION", "Belajar PHP OOP");

//Membuat constant dalam PHP > 7.4
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

//Akses constant yang ada di dalam class
echo Person::AUTHOR . PHP_EOL;