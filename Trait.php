<?php

require_once __DIR__ . "/data/SayGoodBy.php";

use Data\Traits\{Person};

$person = new Person();
$person->hello("ismail");
$person->goodBy("ismail");

$person->nama = "hasan";
$person->children("bila");

$person->getNama();
$person->getAlamat();