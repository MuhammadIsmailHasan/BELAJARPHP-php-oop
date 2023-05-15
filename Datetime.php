<?php
/*
    - untuk pengaturan timezone ada di file php.ini->timezone
    - pastikan timezone sesuai dengan yang diinginkan
*/
$now = new DateTime();
var_dump($now); // default timezone nya adalah Europe/Berlin

// set datetime & timezone
$now->setDate(1996, 04, 22);
$now->setTime(20, 10, 0);
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

/*  - menambah atau mengurang timezone
    - 'P' adalah period, WAJIB ada
    - Y = year, M = month, D = day
*/
$now->add(new DateInterval("P2Y")); // add 2 year
var_dump($now);

$kurangin = new DateInterval("P5M"); // cara mengurangi 5 bulan
$kurangin->invert = true;
$now->add($kurangin); 
var_dump($now);

// merubah datetime ke string (untuk frontend)
$stringTime = $now->format("d-M-Y H:i:s");
echo $stringTime . PHP_EOL;

// merubah dari string (inputan user) ke datetime
// argumen pertama = sesuai format yang diinputkan di argumen kedua
// kemudian akan dirubah ke format datetime Y-m-d
$input = DateTime::createFromFormat("d-m-Y H:i:s", "22-04-2022 10:10:50", new DateTimeZone("Asia/Jayapura"));
$gantiPenghubung = DateTime::createFromFormat("Y/m/d H:i:s", "2022/06/20 10:10:50", new DateTimeZone("America/Toronto"));
$salah = DateTime::createFromFormat("Y/m/d H:i:s", "2022/06/20 10:9", new DateTimeZone("Asia/Makassar"));
var_dump($input);
var_dump($salah); // returnnya adalah bool (false)
var_dump($gantiPenghubung);
