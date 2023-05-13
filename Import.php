<?php

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";
/*
    use digunakan untuk import
    as digunakan untu alias
    jika terdapat nama class yang sama meskpi beda namespace, maka ERROR
    {} digunakan untuk gruping use
*/

use Data\One\{Dummy, Testing};
use Data\{One\Conflict as Conflict1, Two\Conflict as Conflict2};
use function Data\Helper\helpMe;
use const Data\Helper\APPLICATION;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$dummy = new Dummy();
$testing = new Testing();

helpMe();
echo APPLICATION . PHP_EOL;
