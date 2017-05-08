<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/5/8
 * Time: 下午11:50
 */

namespace Jonas\DP\Partterns\Common;

abstract class Client
{
    abstract public function before();

    abstract public function after();

    public function run()
    {
        echo "//====================before==========================//\n";
        $this->before();
        echo "//====================after==========================//\n";
        $this->after();
    }
}