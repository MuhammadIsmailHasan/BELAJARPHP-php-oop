<?php

require_once __DIR__ . "/data/Person.php";

define("APPLICATION", "Belajar PHP OOP"); // sebelum php 7.4
const VERSION = "1.0"; // update php 7.4

echo APPLICATION . PHP_EOL;
echo VERSION . PHP_EOL;

echo Person::AUTHOR . PHP_EOL;
// constant menempel di class (bukan objectnya), cara akses adalah dengan manggil classnya