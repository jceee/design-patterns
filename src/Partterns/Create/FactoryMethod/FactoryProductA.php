<?php

namespace Jceee\DP\Partterns\Create\FactoryMethod;

class FactoryProductA implements CreateInterface
{
    public function create()
    {
        return new ProductA();
    }
}