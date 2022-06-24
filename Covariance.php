<?php

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

//Mengakses class dan fungsi dari covariance cat
$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

//Mengakses class dan fungsi dari covariance dog
$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Doggy");
//Melakukan akses ke dalam Parent class dari $AnimalFood
$dog->eat(new \Data\Food());
