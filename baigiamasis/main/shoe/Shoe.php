<?php

class Shoe
{
    public $brand;
    public $size;
    public $name;
    public $price;

    function __construct($brand, $size, $name, $price)
    {
        $this->brand  = $brand;
        $this->size   = $size;
        $this->name   = $name;
        $this->price  = $price;
    }
}