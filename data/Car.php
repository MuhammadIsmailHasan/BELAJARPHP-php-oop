<?php

/*
    - interface hampir sama dg abstract class
    - interface tidak punya properties
    - bedanya, 1 class bisa mewarisi banyak interface, abstract class atau tidak
    - mewarisinya, interface -> implemenet | class -> extends

    - interface bisa mewarisi interface lainnya, dengan keyword 'extends'
    - dan 1 interface bisa mewarisi banyak interface lain
*/

namespace Data;

interface HasBrand 
{
    function getBrand() : string;
}

interface isMaintanance 
{
    function isMaintanance() : bool;
}

interface Car extends HasBrand 
{
    function getCar() : void;

    function setPrice(int $price) : int;
}

class Avanza implements Car, isMaintanance
{
    private int $price;
    function getCar() : void
    {
        echo "Avanza" . PHP_EOL;
    }

    function setPrice(int $price) : int
    {
        return $this->price = $price;
    }

    function getBrand() : string
    {
        return "Toyota" . PHP_EOL;
    }

    function isMaintanance() : bool
    {
        return false;
    }
}