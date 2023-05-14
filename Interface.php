<?php

require_once __DIR__ . "/data/Car.php";

use Data\{Avanza};

$avanza = new Avanza();
$avanza->getCar();
echo $avanza->getBrand();
echo $avanza->setPrice(1000);
echo $avanza->isMaintanance();