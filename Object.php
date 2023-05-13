<?php

require_once __DIR__ . "/data/Person.php";

$ismail = new Person(); // inisiasi object
var_dump($ismail);

$ismail->nama = "ismail";
$ismail->umur = 27;
var_dump($ismail);

$ismail->sayHello(null);
$ismail->sayHello("nabila");

$ismail->info();