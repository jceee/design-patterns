<?php

namespace Jonas\DP\Partterns\Create\AbstractFactory\Product;

abstract class Book
{
    protected $name;

    public function showBookName()
    {
        return $this->name;
    }
}
