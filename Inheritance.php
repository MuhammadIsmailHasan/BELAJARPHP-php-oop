<?php

require_once __DIR__ . "/data/Departement.php";

$manajer = new Manajer("manajer");
$manajer->sayHello("ismail");

$staff = new Staff("staff");
$staff->sayHello("nabila");