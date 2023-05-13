<?php

require_once __DIR__ . '/data/PersonWithConstruct.php';

$ismail = new PersonWithConstruct("ismail", 27);
$nabila = new PersonWithConstruct("nabila", null);

$ismail->getNama();

var_dump($ismail);

echo "program selesai" . PHP_EOL;