<?php

namespace Jonas\DP\Partterns\Create\AbstractFactory;

abstract class ProductFactory
{
    abstract public static function phone();

    abstract public static function book();

}