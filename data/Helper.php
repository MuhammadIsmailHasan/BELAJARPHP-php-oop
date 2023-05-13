<?php
//praktek akses function dan constant melalui namespace 

// jika 1 file ada beberapa namespace, maka harus ada {}
namespace Data\Helper;

function helpMe() : void {
    echo "bantu kami" . PHP_EOL;
}

const APPLICATION = "Belajar PHP OOP";