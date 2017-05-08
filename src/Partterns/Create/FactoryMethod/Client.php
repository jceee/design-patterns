<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/5/8
 * Time: 下午11:03
 */

namespace Jonas\DP\Partterns\Create\FactoryMethod;

use Jonas\DP\Partterns\Create\Product\ProductA;
use Jonas\DP\Partterns\Create\Product\ProductB;

require_once __DIR__ . '/../../../Bootstrap/config.php';

class Client extends \Jonas\DP\Partterns\Common\Client
{
    public function before()
    {
        $productA = new ProductA();
        $productB = new ProductB();

        var_dump($productA->getName());
        var_dump($productB->getName());
    }

    public function after()
    {
        var_dump((new FactoryProductA())->create()->getName());
        var_dump((new FactoryProductB())->create()->getName());
    }
}

(new Client())->run();