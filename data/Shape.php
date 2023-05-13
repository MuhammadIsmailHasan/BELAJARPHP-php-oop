<?php

namespace Data;

class Shape 
{
    public function getCorner() : int 
    {
        return -6;
    }
}

class Regtangle extends Shape 
{
    public function getCorner(): int // ini akan menimba function getCorner parentnya
    {
        return 10;
    }

    public function getCornerThis() : int // ini akan ambil getCorner Regtangle
    {
        return $this->getCorner();
    }

    public function getCornerParent() : int // ini akan ambil getCornet Shape
    {
        return parent::getCorner();
    }
}