<?php

//Liat classnya disini
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

//fungsi sayHello pada class Manager akan tergantikan dengan fungsi sayHello yang ada pada class VicePresident yang merupakan turunan class Manager
$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");