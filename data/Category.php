<?php

class Category
{
    //menjaga agar data tersembunyi dari akses luar
    private string $name;
    private bool $expensive;

    //Kode Getter
    public function getName(): string
    {
        return $this->name;
    }

    //Kode Setter
    public function setName(string $name): void
    {
        //Jika merubah dengan string kosong maka data tidak akan berubah
        if(trim($name) != ""){
            $this->name = $name;
        }
    }

    //Kode getter
    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    //Kode Setter
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
