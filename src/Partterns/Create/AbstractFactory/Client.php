<?php
namespace Jonas\DP\Partterns\Create\AbstractFactory;

use Jonas\DP\Partterns\Create\AbstractFactory\Product\Iphone;
use Jonas\DP\Partterns\Create\AbstractFactory\Product\MacBook;

require_once __DIR__ . '/../../../Bootstrap/config.php';

class Client extends \Jonas\DP\Partterns\Common\Client
{
    public function before()
    {
        var_dump((new Iphone())->showPhoneName());
        var_dump((new MacBook())->showBookName());
    }

    public function after()
    {
        var_dump(AppleFactory::phone()->showPhoneName());
        var_dump(AppleFactory::book()->showBookName());
    }
}

(new Client())->run();