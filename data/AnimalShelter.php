<?php

namespace Data;
require_once __DIR__ . "/Animal.php";

interface AnimalShelter 
{
    public function adopt (string $nama) : Animal;
}

class DogShelter implements AnimalShelter
{
    function adopt(string $nama) : Dog { 
        // return nya beda dengan interface, dirubah menjadi child class dari parent animal 
        $dog = new Dog();
        $dog->nama = $nama;
        $dog->run();
        
        return $dog;
    }
}

class CatShelter implements AnimalShelter
{
    function adopt(string $nama) : Cat {
        $cat = new Cat();
        $cat->nama = $nama;
        
        return $cat;
    }
}