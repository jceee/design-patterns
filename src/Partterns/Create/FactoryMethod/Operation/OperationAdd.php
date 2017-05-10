<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod\Operation;

class OperationAdd extends Operation
{
    public function getResult()
    {
        return $this->val[0] + $this->val[1];
    }
}