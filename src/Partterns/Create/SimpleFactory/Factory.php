<?php
namespace Jonas\DP\Partterns\Create\SimpleFactory;

use Jonas\DP\Partterns\Create\Product\ProductA;
use Jonas\DP\Partterns\Create\Product\ProductB;

class Factory
{
    public static function createProduct($type)
    {
        switch ($type) {
            case 'A':
                return new ProductA();
            default:
            case 'B':
                return new ProductB();
                break;
        }
    }
}