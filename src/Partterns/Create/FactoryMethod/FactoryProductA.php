<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod;

use Jonas\DP\Partterns\Create\Product\ProductA;

class FactoryProductA implements CreateInterface
{
    public function create()
    {
        return new ProductA();
    }
}