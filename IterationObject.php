<?php
/*
    - property-property di dalam class bisa dipanggil dengan perulangan
    - namun hanya yg visibility 'public' saja, protected & private tidak akan terpanggil
    - solusinya adalah property-property merubah ke dalam array dan di membuat iterator di function
    - INTINYA ITERATOR ADALAH TRAVERSE(MENJELAJAH) OBJECT SEHINGGA BISA DI READ ATAU MANIPULASI LAGI 
    - fungsinya lebih bisa komplek jika menggunakan perulangan biasa
*/

class Data {
    var string $first = "Muhammad";
    public string $middle = "Ismail";
    protected string $last = "Hasan";
    private string $title = "S.Kom";

    function iniArray() {
        // membuat property yg akn di expose secara manual
        $arrray = [
            "middle" => $this->middle,
            "last" => $this->last,
            "title" => $this->title
        ];
        return $arrray;
    }
}

$dataNew = new Data();
var_dump($dataNew);
foreach ($dataNew as $property => $value) { 
    echo "$property : $value" . PHP_EOL;
}
echo "----- akhir data new (hanya visibility public) ----------" . PHP_EOL;

foreach ($dataNew->iniArray() as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
echo "----- akhir function array ----------" . PHP_EOL;



class ObjectIteration implements IteratorAggregate
{
    var string $first = "Muhammad";
    public string $middle = "Ismail";
    protected string $last = "Hasan";
    private string $title = "S.Kom";

    function getIterator() : Traversable {
        $arrray = [
            "first" => $this->first,
            "last" => $this->last,
            "title" => $this->title
        ];

        // cara manual
        return new ArrayIterator($arrray);
    }
}

$data = new ObjectIteration();
foreach ($data as $property => $value) { // tanpa memanggil function iteratornya
    echo "$property : $value" . PHP_EOL;
}
echo "---------- dengan interface array operator (bedanya dg array biasa adalah perulangan object nya)" . PHP_EOL;

var_dump($data);
var_dump($data->getIterator());

