<?php

/*
    - biasanya dibuat untuk helper
    - bisa menampung seluruh properties dan function
    - sebagai opsi agar dimamic function, jadi bisa digunakan untuk banyak proses
*/
require_once __DIR__ . "/exception/RegisterRequest.php";
require_once __DIR__ . "/exception/LoginRequest.php";
require_once __DIR__ . "/Helper/ValidateHelper.php";

$register = new RegisterRequest();
$register->nama = "tes";
$register->email = "ismail@gmail.com";

$registerProses = new ValidateHelper();
$registerProses->validate($register);

$login = new LoginRequest();
$login->usernama = null;
$login->password = null;

$loginProses = new ValidateHelper();
$loginProses->validate($login);

