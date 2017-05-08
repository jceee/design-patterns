<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/5/8
 * Time: 下午11:36
 */

namespace Jonas\DP\Partterns\Create\SimpleFactory;

use Jonas\DP\Partterns\Create\Product\ProductA;
use Jonas\DP\Partterns\Create\Product\ProductB;

require_once __DIR__ . '/../../../Bootstrap/config.php';

class Client extends \Jonas\DP\Partterns\Common\Client
{
    public function before()
    {
        $productA = new ProductA();

        var_dump($productA->getName());

        $productB = new ProductB();

        var_dump($productB->getName());
    }

    public function after()
    {
        $productA = Factory::createProduct('A');
        $productB = Factory::createProduct('B');

        var_dump($productA->getName());
        var_dump($productB->getName());
    }
}

(new Client())->run();
