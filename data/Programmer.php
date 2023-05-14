<?php

class Programmer 
{
    public string $nama;

    public function __construct(string $nama)
    {
        $this->nama = strtoupper($nama);
    }
}

class Backend extends Programmer
{
    public function __construct(string $nama, ?int $umur)
    {
        parent::__construct($nama);
        echo "Hello, " . $this->nama . ", umur $umur. dari devisi backend" . PHP_EOL;
    }
}

class Frontend extends Programmer 
{
    public function sayBy() : void
    {
        echo "Good by, $this->nama" . PHP_EOL;
    }
}

class Company {
    public Programmer $programmer;
}

function polymorFunction (Programmer $programmer)
{
    if ($programmer instanceof Backend)
    {
        echo "hello backend : $programmer->nama" . PHP_EOL;
    } else if ($programmer instanceof Frontend) 
    {
        echo "hello frontend : $programmer->nama" . PHP_EOL;
    } else if ($programmer instanceof Programmer)
    {
        echo "hello programmer : $programmer->nama" . PHP_EOL;
    }
}