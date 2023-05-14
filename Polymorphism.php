<?php

require_once __DIR__ . "/data/Programmer.php";

$programmer = new Programmer("ismail");

$backend = new Backend("mail", 100);

$frontend = new Frontend("hasan");
echo $frontend->sayBy() . PHP_EOL;

$company1 = new Company();
$company1->programmer = new Programmer("nabila");
$company1->programmer = new Backend("bila", 25);
$company1->programmer = new Frontend("muhammad");
echo $company1->programmer->sayBy() . PHP_EOL;

// polymorphism at function argument
polymorFunction(new Programmer("ismail"));
polymorFunction(new Backend("hasan", 25));
polymorFunction(new Frontend("nabila"));
