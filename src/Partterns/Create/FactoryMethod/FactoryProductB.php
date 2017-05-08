<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod;

use Jonas\DP\Partterns\Create\Product\ProductB;

class FactoryProductB implements CreateInterface
{
    public function create()
    {
        return new ProductB();
    }
}