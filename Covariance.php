<?php 
/*
    - covariance adalah kemampuan overridde function, agar lebih spesifik
    - bisa dalam return nya atau argumennya
    - misal dari return parent class ke child nya

    - contravariance kebalikan daro covariance
    - dari child class ke parent class
*/
require_once __DIR__ . "/data/Animal.php";
require_once __DIR__ . "/data/AnimalShelter.php";
require_once __DIR__ . "/data/Food.php";

use Data\{DogShelter, CatShelter, AnimalFood, Food};

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt('mikel'); 
// $dog adalah object dari class Dog
// karena function adopt return valuenya adalah object dog
// di file AnimalShelter

$dog->eat(new Food);
// object dog mengakses function di class Dog (file Animal)
var_dump($dogShelter);
var_dump($dog);

$catShelter = new CatShelter();
$cat = $catShelter->adopt("luna");
$cat->eat(new AnimalFood);
var_dump($cat);
