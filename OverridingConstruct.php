<?php

require_once __DIR__ . "/data/Product.php";

$appleProduct = new Product("apple", 5000);
echo $appleProduct->getNama() . PHP_EOL;

$dummyBanana = new dummyProduct("banana");
echo $dummyBanana->getNama() . PHP_EOL;

$overProduct = new overridingProduct("tes over");
echo $overProduct->getNama() . PHP_EOL;
