<?php

require_once __DIR__ . "/data/Product.php";

$apple = new Product("apple", 5000);
echo $apple->getNama() . PHP_EOL;
echo $apple->getHarga() . PHP_EOL;

$dummy = new dummyProduct("banana");
echo $dummy->getNama() . PHP_EOL;