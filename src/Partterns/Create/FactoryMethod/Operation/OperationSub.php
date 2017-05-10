<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod\Operation;

class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->val[0] - $this->val[1];
    }
}