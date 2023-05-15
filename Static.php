<?php

require_once __DIR__ . "/Helper/MathHelper.php";

$math = new MathHelper();
MathHelper::$angka = 100;
echo MathHelper::$angka . PHP_EOL;

MathHelper::$angka = 10;
echo MathHelper::$angka . PHP_EOL;

$sum = MathHelper::helperSum(5,5,5);
echo $sum;

// property dan function yang ada static akan nempel pada class
// begitupun cara aksesnya langsung melalui class