<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    //abstract function wajib di override oleh fungsi di child agar bisa digunakan
    abstract public function run(): void;

    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    //Override abstract funtion
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    //Override abstract funtion
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    //Mengakses parent class dari $animalFood
    //Contravariance
    public function eat(Food $animalFood): void
    {
        echo "Dog is eating" . PHP_EOL;
    }
}