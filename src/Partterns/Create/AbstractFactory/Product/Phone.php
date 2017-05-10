<?php

namespace Jonas\DP\Partterns\Create\AbstractFactory\Product;

abstract class Phone
{
    protected $name;

    public function showPhoneName()
    {
        return $this->name;
    }
}
