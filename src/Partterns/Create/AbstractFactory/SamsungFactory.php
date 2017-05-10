<?php

namespace Jonas\DP\Partterns\Create\AbstractFactory;


use Jonas\DP\Partterns\Create\AbstractFactory\Product\S7;
use Jonas\DP\Partterns\Create\AbstractFactory\Product\SamsungBook;

class SamsungFactory extends ProductFactory
{
    public static function phone()
    {
        return new S7();
    }

    public static function book()
    {
        return new SamsungBook();
    }

}