<?php

class Product
{
    //Hanya bisa diakses dari class dan subclass
    protected string $name;

    //Hanya bisa diakses dari class dan subclass
    protected int $price;

   //Private hanya bisa diaksed dalri class itu sendiri
   //akan memunculkan warning jika dijalankan
    //private int $price;

    //bisa diakses dari class, subclass, dan World
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //bisa diakses dari class, subclass, dan World
    public function getName(): string
    {
        return $this->name;
    }

    //bisa diakses dari class, subclass, dan World
    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{

    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
        echo "Price $this->price" . PHP_EOL;
    }

}

