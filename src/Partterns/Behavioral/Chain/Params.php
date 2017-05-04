<?php

namespace Jceee\DP\Partterns\Behavioral\Chain;

class Params
{
    protected $params;

    public function setParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    public function getParam($key)
    {
        return $this->params[$key];
    }
}
