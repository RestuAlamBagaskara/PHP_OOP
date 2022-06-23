<?php

namespace Data;

//Mirip seperti abstract tapi semua otomatis menjadi abstract class
//Digunakan sebagai prototype
//Tidak boleh ada properties
interface HasBrand
{
    //Tidak perlu menggunakan abstract karena sudah otomatis menjadi abstract
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

//Interfaca diwariskan dengan keyword extends untuk interface
interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

//Pewarisan interface menggunakan keyword implement dan bisa mewarisi lebih dari 1 interface untuk class
class Avanza implements Car, IsMaintenance
{

    //override fungsi yang ada pada interface
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }

}