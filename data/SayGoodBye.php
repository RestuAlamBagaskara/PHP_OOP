<?php

namespace Data\Traits;

//Trait digunakan untuk menyimpan function yang digunakan ulang di beberapa class
trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    //wajib di override
    public abstract function run(): void;
}

class ParentPerson {

    //FUngsi disini akan ter-override oleh trait
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }

}

trait All {
    //Trait mewarisi trait lain dengan keyword use
    use SayGoodBye, SayHello, HasName, CanRun {
        // bisa di override
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    //fungsi yang ada disini
    use All;

    //Akan ter-override oleh child dari ParentPerson

    //Override fungsi yang ada pada traits CanRun
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

}