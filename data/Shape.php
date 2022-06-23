<?php

namespace Data;

class Shape
{

    public function getCorner()
    {
        return -1;
    }

}

class Rectangle extends Shape
{

    public function getCorner()
    {
        return 4;
    }

    public function getParentCorner()
    {
        //digunakan untuk mengakses fungsi yang sudah ter-overridding oleh fungsi dari child class nya
        return parent::getCorner();
    }

}

//Jalankan Parent.php
