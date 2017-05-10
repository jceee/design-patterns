<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod;

use Jonas\DP\Partterns\Create\FactoryMethod\Operation\OperationSub;

class SubFactory implements CreateInterface
{
    public static function createOption()
    {
        return new OperationSub();
    }
}