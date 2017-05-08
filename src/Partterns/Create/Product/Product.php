<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/5/7
 * Time: 下午6:20
 */

namespace Jonas\DP\Partterns\Create\Product;

abstract class Product
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }
}