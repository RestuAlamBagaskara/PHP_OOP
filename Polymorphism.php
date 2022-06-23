<?php

//memiliki nama fungsi yang sama tapi memiliki fungsi yang berbeda
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Alam");
var_dump($company);

$company->programmer = new BackendProgrammer("Alam");
var_dump($company);

$company->programmer = new FrontendProgrammer("Alam");
var_dump($company);

sayHelloProgrammer(new Programmer("Alam"));
sayHelloProgrammer(new BackendProgrammer("Alam"));
sayHelloProgrammer(new FrontendProgrammer("Bagaskara"));