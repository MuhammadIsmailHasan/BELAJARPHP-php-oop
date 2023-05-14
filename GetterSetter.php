<?php

require_once __DIR__ . "/data/Category.php";

$hp = new Category();
$hp->setBarang("hp");
$hp->setKemahalan(true);
$hp->setBarang("");

echo "hp : {$hp->getBarang()}" . PHP_EOL;
echo "kemahalan : " . $hp->isKemahalan() . PHP_EOL;