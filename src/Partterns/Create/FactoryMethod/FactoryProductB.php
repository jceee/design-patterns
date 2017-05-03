<?php

namespace Jceee\DP\Partterns\Create\FactoryMethod;

class FactoryProductB implements CreateInterface
{
    public function create()
    {
        return new ProductB();
    }
}