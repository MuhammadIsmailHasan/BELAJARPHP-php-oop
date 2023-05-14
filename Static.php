<?php

require_once __DIR__ . "/Helper/MathHelper.php";

$math = new MathHelper();
$math::$angka = 100;
echo $math::$angka . PHP_EOL;

$math::$angka = 10;
echo $math::$angka . PHP_EOL;

$sum = $math::helperSum(5,5,5);
echo $sum;