<?php
namespace Jceee\DP\Partterns\Create\SimpleFactory;

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