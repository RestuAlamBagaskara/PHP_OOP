<?php

require_once "data/Animal.php";

//import class
use Data\{Animal, Cat, Dog};

//inisialisasi class
$cat = new Cat();
$cat->name = "Luna";
//Fungsi yang sudah di override di class Cat
$cat->run();

//inisialisasi class
$dog = new Dog();
$dog->name = "Doggy";
//Fungsi yang sudah di override di class Dog
$dog->run();
