<?php

namespace Jonas\DP\Partterns\Create\FactoryMethod\Operation;

abstract class Operation
{
    protected $val = [];

    public function setVal($val)
    {
        array_push($this->val, $val);
        return $this;
    }

    abstract public function getResult();
}
