<?php

namespace Data;

//class tidak bisa dibuat sebagai object secara angsing, hanya bisa diturunkan
abstract class Location
{

    public string $name;

}

class City extends Location
{
}

class Province extends Location
{
}

class Country extends Location
{
}
