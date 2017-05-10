<?php

namespace Jonas\DP\Partterns\Create\AbstractFactory;

use Jonas\DP\Partterns\Create\AbstractFactory\Product\Iphone;
use Jonas\DP\Partterns\Create\AbstractFactory\Product\MacBook;

class AppleFactory extends ProductFactory
{
    public static function phone()
    {
        return new Iphone();
    }

    public static function book()
    {
        return new MacBook();
    }

}