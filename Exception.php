<?php

require_once __DIR__ . "/exception/LoginRequest.php";
require_once __DIR__ . "/exception/ValidateException.php";
require_once __DIR__ . "/exception/ValidateLoginRequest.php";

// object request
$request = new LoginRequest();
$request->usernama = "ismail";
$request->password = "ismail";

$requestNull = new LoginRequest();

$requestKosong = new LoginRequest();
$requestKosong->usernama = " ";
$requestKosong->password = " ";

// panggil dengan try catch
$login = new ValidateLoginRequest();
try {
    $login->validate($requestNull);
} catch (ValidateException $th) {
    echo "errornya : {$th->getMessage()}" . PHP_EOL;
} catch (Exception $th) {
    echo "errornya : {$th->getMessage()}" . PHP_EOL;
}
//atau 
try {
    $login->validate($requestKosong);
} catch (ValidateException | Exception $th) {
    echo "errornya : {$th->getMessage()}" . PHP_EOL;
    var_dump($th->getTrace()); // untuk tracing detail errornya
} finally {
    echo "error atau tidak, pasti akan di print" . PHP_EOL;
}


// panggil tanpa try catch
// $login->validate($requestNull);
// var_dump($login); // error dari function ValidateException

// $login->validate($requestKosong);
// var_dump($login); // error dari function Exception