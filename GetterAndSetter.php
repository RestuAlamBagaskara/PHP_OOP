<?php

require_once "data/Category.php";

$category = new Category();

//Mengubah name yang memiliki modifier private
//Menggunakan setter
$category->setName("Handphone");
$category->setExpensive(true);

//Fungsi setter tidak akan merubah data karena tidak valid karena string kosong
$category->setName("              ");

//Menampilkan name yang memiliki modifier private
//Menggunakan getter
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
