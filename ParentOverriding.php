<?php

require_once __DIR__ . "/data/Shape.php";

use Data\{Shape, Regtangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$regtangle = new Regtangle();
echo $regtangle->getCorner() . PHP_EOL;
echo $regtangle->getCornerThis() . PHP_EOL;
echo $regtangle->getCornerParent() . PHP_EOL;