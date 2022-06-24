<?php

class Manager
{
    var string $name;

    var string $title;

    //Termasuk ke dalam magic function
    public function __construct(string $name = "", string $title = "Manager"){
        $this->name = $name;
        $this->title = $title;
    }

    //Menggunakan void untuk menandakan tidak mengambalikan value 
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

//VicePresident adalah turunan dari class Manager
//Inheritance dilakukan dengan cara menambahkan kata kunci extends
class VicePresident extends Manager
{

    //melakukan overridding pada constructor parent class
    public function __construct(string $name = "")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }

}