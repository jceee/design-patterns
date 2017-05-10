<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod;

use Jonas\DP\Partterns\Create\FactoryMethod\Operation\OperationAdd;

class AddFactory implements CreateInterface
{
    public static function createOption()
    {
        return new OperationAdd();
    }
}