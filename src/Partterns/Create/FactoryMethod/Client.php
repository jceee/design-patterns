<?php
/**
 * Created by PhpStorm.
 * User: jceee
 * Date: 17/5/8
 * Time: 下午11:03
 */

namespace Jonas\DP\Partterns\Create\FactoryMethod;

use Jonas\DP\Partterns\Create\FactoryMethod\Operation\OperationAdd;
use Jonas\DP\Partterns\Create\FactoryMethod\Operation\OperationSub;

require_once __DIR__ . '/../../../Bootstrap/config.php';

class Client extends \Jonas\DP\Partterns\Common\Client
{
    public function before()
    {
        $create = function ($type = '') {
            switch ($type) {
                case 'Add':
                    return new OperationAdd();
                    break;
                case 'Sub':
                default:
                    return new OperationSub();
                    break;
            }
        };
        $operationAdd = $create('Add');
        $operationSub = $create('Sub');

        var_dump( $operationAdd->setVal(10)->setVal(1)->getResult());
        var_dump($operationSub->setVal(10)->setVal(1)->getResult());
    }

    public function after()
    {
        var_dump(AddFactory::createOption()->setVal(10)->setVal(1)->getResult());
        var_dump(SubFactory::createOption()->setVal(10)->setVal(1)->getResult());
    }
}

(new Client())->run();