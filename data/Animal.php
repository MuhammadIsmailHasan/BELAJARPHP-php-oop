<?php 

namespace Data;

require_once __DIR__ . "/Food.php";

abstract class Animal 
{
    public string $nama;
    abstract public function run () : void;

    abstract public function eat(AnimalFood $animalFood) : void;
}

class Cat extends Animal
{
    public function run() : void {
        echo "ini adalah animal $this->nama running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood) : void { 
        echo "cat di animal eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run() : void {
        echo "ini adalah animal $this->nama running" . PHP_EOL;
    }

    public function eat(Food $food) : void { // ini contravariances
        echo "dog di animal eating" . PHP_EOL;
    }
}