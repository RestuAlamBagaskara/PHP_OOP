<?php

interface HelloWorld
{
    function sayHello(): void;
}

//Anonymus class
//Digunakan untuk implementasi interface atau abstract class tanpa harus impementasi classnya
//Membuat class sekaligus inisialisasi
$helloWorld = new class("Restu") implements HelloWorld {

    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();
